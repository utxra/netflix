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
use phpDocumentor\Reflection\Types\ArrayKey;

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
                'peliculas' => $this->get_movies(),
                'series' => $this->get_series(),
            ]),
            $user->getIsVerified() === false => $this->redirectToRoute('app_not_verified_email'),
        };
    }

    public function get_movies(): Array
    {
        $client = new GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/top_rated?language=es-ES&page=1&region=ES', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Extraer los datos necesarios
        $peliculas = array_map(function ($pelicula) {
            return [
                'id' => $pelicula['id'], // Esto puede ser útil para enlaces a 'detalles de la película
                'title' => $pelicula['title'],
                'description' => $pelicula['overview'],
                'image' => 'https://image.tmdb.org/t/p/w500' . $pelicula['poster_path'],
                'release_date' => $pelicula['release_date'],
                'genres' => array_column($pelicula['genre_ids'], 'name') // Esto puede necesitar otra llamada para mapear IDs a nombres
            ];
        }, $data['results']);

        return $peliculas;
    }

    public function get_series(): Array
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

            return [
                'title' => $serie['name'],
                'description' => $serie['overview'],
                'image' => 'https://image.tmdb.org/t/p/w500' . $serie['poster_path'],
                'release_date' => $serie['first_air_date'],
                'genres' => array_map(function ($genre) {
                    return $genre['name'];
                }, $serieData['genres']),
                'number_of_seasons' => $serieData['number_of_seasons'],
                'number_of_episodes' => $serieData['number_of_episodes'],
                'seasons' => array_map(function ($season) {
                    return [
                        'season_number' => $season['season_number'],
                        'episode_count' => $season['episode_count'],
                        'air_date' => $season['air_date'],
                    ];
                }, $serieData['seasons']),
            ];
        }, $data['results']);

        return $series;
    }
}
