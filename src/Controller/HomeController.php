<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\UserMenuService;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use GuzzleHttp;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use phpDocumentor\Reflection\Types\ArrayKey;
use phpDocumentor\Reflection\Types\Integer;

class HomeController extends AbstractDashboardController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }

        return match (true) {
            $user->getIsVerified() => $this->render('home/index.html.twig', [
                'avatar' => $user->getAvatarUrl(),
                'top_rated_peliculas' => $this->get_top_movies(5),
                'top_rated_series' => $this->get_series(5),
                'banner_movie' => $this->get_banner_movie(),
            ]),
            $user->getIsVerified() === false => $this->redirectToRoute('app_not_verified_email'),
        };
    }

    public function get_top_movies(int $num): array
    {
        $client = new \GuzzleHttp\Client();

        $genres = $this->get_genres();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/top_rated?language=es-ES&page=1&region=ES', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $limitedMovies = array_slice($data['results'], 0, $num);

        // Extraer los datos necesarios
        $peliculas = array_map(function ($pelicula) use ($genres) {
            return [
                'id' => $pelicula['id'],
                'title' => $pelicula['title'],
                'description' => $pelicula['overview'],
                'vote_average' => $pelicula['vote_average'] *10,
                'image' => 'https://image.tmdb.org/t/p/original' . $pelicula['backdrop_path'],
                'release_date' => $pelicula['release_date'],
                'genres' => array_map(function ($genre_id) use ($genres) {
                    return $genres[$genre_id] ?? 'Unknown';
                }, $pelicula['genre_ids']),
                'cast' => $this->get_movies_cast($pelicula['id']),
            ];
        }, $limitedMovies);

        return $peliculas;
    }

    public function get_series(int $num): array
    {
        $client = new GuzzleHttp\Client();

        // Obtener series top-rated
        $response = $client->request('GET', 'https://api.themoviedb.org/3/tv/top_rated?language=es-ES&page=1', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $limitedSeries = array_slice($data['results'], 0, $num);

        // Obtener detalles de cada serie
        $series = array_map(function ($serie) use ($client) {
            $serie_id = $serie['id'];
            $serieResponse = $client->request('GET', "https://api.themoviedb.org/3/tv/{$serie_id}?language=es-ES", [
                'headers' => [
                    'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                    'accept' => 'application/json',
                ],
            ]);

            $serieData = json_decode($serieResponse->getBody(), true);

            $cast = $this->get_series_cast($serie_id);

            return [
                'id' => $serie['id'],
                'title' => $serie['name'],
                'description' => $serie['overview'],
                'vote_average' => $serie['vote_average']*10,
                'image' => 'https://image.tmdb.org/t/p/original' . $serie['backdrop_path'],
                'release_date' => $serie['first_air_date'],
                'genres' => array_map(function ($genre) {
                    return $genre['name'];
                }, $serieData['genres']),
                'number_of_seasons' => $serieData['number_of_seasons'],
                'number_of_episodes' => $serieData['number_of_episodes'],
                'seasons' => array_map(function ($season) {
                    return [
                        'id' => $season['id'],
                        'name' => $season['name'],
                        'season_number' => $season['season_number'],
                        'episode_count' => $season['episode_count'],
                        'air_date' => $season['air_date'],
                    ];
                }
                , $serieData['seasons']),
                'cast' => $cast,
            ];
        }, $limitedSeries);

        dump($series[0]);

        return $series;
    }

    #[Route(name: 'get_episodes')]
    public function get_episodes (int $serieId, Request $request)
    {
        $seasonId = $request->query->get('seasonId');
    
        $client = new \GuzzleHttp\Client();
        // Obtén los episodios de la temporada seleccionada
        $response = $client->request('GET', "https://api.themoviedb.org/3/tv/{$serieId}/season/{$seasonId}?language=es-ES", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);
        $season = json_decode($response->getBody(), true);
        $episodes = $season['episodes'];
        return new JsonResponse(['episodes' => $episodes]);
    }

    public function get_genres(): array
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/genre/movie/list?language=es-ES', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $genres = [];
        foreach ($data['genres'] as $genre) {
            $genres[$genre['id']] = $genre['name'];
        }

        return $genres;
    }

    public function get_series_cast(int $id): array
    {
        $client = new \GuzzleHttp\Client();

        // Obtener reparto
        $castResponse = $client->request('GET', "https://api.themoviedb.org/3/tv/{$id}/credits?language=es-ES", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $castData = json_decode($castResponse->getBody(), true);
        $cast = array_map(function ($member) {
            return [
                'name' => $member['name'],
                'character' => $member['character'],
                'profile_path' => 'https://image.tmdb.org/t/p/original' . $member['profile_path'],
            ];
        }, $castData['cast']);

        $cast = array_slice($cast, 0, 9);

        return $cast;
    }

    public function get_movies_cast(int $id): array
    {
        $client = new \GuzzleHttp\Client();

        // Obtener reparto
        $castResponse = $client->request('GET', "https://api.themoviedb.org/3/movie/{$id}/credits?language=es-ES", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $castData = json_decode($castResponse->getBody(), true);
        $cast = array_map(function ($member) {
            return [
                'name' => $member['name'],
                'character' => $member['character'],
                'profile_path' => 'https://image.tmdb.org/t/p/w500' . $member['profile_path'],
            ];
        }, $castData['cast']);

        $cast = array_slice($cast, 0, 9);

        return $cast;
    }

    public function get_dialog_video(int $id): string
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', "https://api.themoviedb.org/{$id}/movie/278/videos?language=es-ES", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);
        
        $data = json_decode($response->getBody(), true);

        $dialogVideo = '';

        foreach ($data['size'] as $video) {
            if ($video['aspect_ratio']) {
                $dialogVideo = 'https://www.youtube.com/watch?' . $video['key'];
                break;
            }
        }

        return $dialogVideo;
    }

    public function get_movie_logo (int $id): string 
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', "https://api.themoviedb.org/3/movie/{$id}/images?include_image_language=es%2C%20null&language=es", [
            'headers' => [
              'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
              'accept' => 'application/json',
            ],
          ]);

        $data = json_decode($response->getBody(), true);

        $logo = $data['logos'][0];

        return 'https://image.tmdb.org/t/p/original' . $logo['file_path'];
    }


    public function get_banner_movie () {
        $client = new \GuzzleHttp\Client();

        $genres = $this->get_genres();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing?language=es-ES&page=1&region=ES', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $bannerMovie = $data['results'][0];

        $bannerMovie = [
            'id' => $bannerMovie['id'],
            'title' => $bannerMovie['title'],
            'description' => $bannerMovie['overview'],
            'vote_average' => $bannerMovie['vote_average'] *10,
            'image' => 'https://image.tmdb.org/t/p/original' . $bannerMovie['backdrop_path'],
            'release_date' => $bannerMovie['release_date'],
            'genres' => array_map(function ($genre_id) use ($genres) {
                return $genres[$genre_id] ?? 'Unknown';
            }, $bannerMovie['genre_ids']),
            'cast' => $this->get_movies_cast($bannerMovie['id']),
            'logo' => $this->get_movie_logo($bannerMovie['id']),
        ];

        dump($bannerMovie['logo']);

        return $bannerMovie;
    }
}
