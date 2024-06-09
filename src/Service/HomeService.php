<?php

namespace App\Service;
use GuzzleHttp;


class HomeService
{
    public function __construct()
    {
        // Add any dependencies or initialization code here
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
                'logo' => $this->get_movie_logo($pelicula['id']),
            ];
        }, $limitedMovies);

        return $peliculas;
    }

    public function get_now_playing_movies(int $num): array
    {
        $client = new \GuzzleHttp\Client();

        $genres = $this->get_genres();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing?language=es-ES&page=1&region=es', [
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
                'logo' => $this->get_movie_logo($pelicula['id']),
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
                'logo' => $this->get_serie_logo($serie['id']),
            ];
        }, $limitedSeries);

        return $series;
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

    public function get_movie_logo (int $id): string 
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', "https://api.themoviedb.org/3/movie/{$id}/images?include_image_language=es,en,pt,fr,null", [
            'headers' => [
              'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
              'accept' => 'application/json',
            ],
          ]);

        $data = json_decode($response->getBody(), true);

        $logos_es = [];
        $logos_en = [];
        $logos_original = [];

        if (isset($data['logos'])) {
            foreach ($data['logos'] as $logo) {
                if ($logo['iso_639_1'] === 'es') {
                    $logos_es[] = $logo['file_path'];
                } elseif ($logo['iso_639_1'] === 'en') {
                    $logos_en[] = $logo['file_path'];
                } elseif ($logo['iso_639_1'] === null) {
                    $logos_original[] = $logo['file_path'];
                }
            }
        }

        // Devolver el logo en español, si no, el logo en inglés, si no, el original, si no, un mensaje
        if (!empty($logos_es)) {
            return 'https://image.tmdb.org/t/p/original' .$logos_es[0];
        } elseif (!empty($logos_en)) {
            return 'https://image.tmdb.org/t/p/original' .$logos_en[0];
        } elseif (!empty($logos_original)) {
            return 'https://image.tmdb.org/t/p/original' .$logos_original[0];
        } else {
            return 'images/logo/logo.png';
        }
    }

    public function get_serie_logo (int $id): string 
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', "https://api.themoviedb.org/3/tv/{$id}/images", [
            'headers' => [
              'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
              'accept' => 'application/json',
            ],
          ]);

        $data = json_decode($response->getBody(), true);

        $logo = $data['logos'][0]['file_path'] ?? "";

        return 'https://image.tmdb.org/t/p/original' . $logo;
    }

    public function get_banner_movie () {
        $client = new \GuzzleHttp\Client();

        $genres = $this->get_genres();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1&region=es', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $bannerMovie = $data['results'][rand(0, count($data['results']) - 1)];

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

        return $bannerMovie;
    }

    public function get_banner_serie () {
        $client = new \GuzzleHttp\Client();

        $genres = $this->get_genres();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/tv/airing_today?language=es-ES&page=1&timezone=UTC', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $bannerSerie = $data['results'][rand(0, count($data['results']) - 1)];

        $bannerSerie = [
            'id' => $bannerSerie['id'],
            'title' => $bannerSerie['name'],
            'description' => $bannerSerie['overview'],
            'vote_average' => $bannerSerie['vote_average'] *10,
            'image' => 'https://image.tmdb.org/t/p/original' . $bannerSerie['backdrop_path'],
            'genres' => array_map(function ($genre_id) use ($genres) {
                return $genres[$genre_id] ?? 'Unknown';
            }, $bannerSerie['genre_ids']),
            'cast' => $this->get_series_cast($bannerSerie['id']),
            'logo' => $this->get_serie_logo($bannerSerie['id']),
        ];

        return $bannerSerie;
    }

    public function get_popular_series(int $num): array
    {
        $client = new GuzzleHttp\Client();

        // Obtener series top-rated
        $response = $client->request('GET', 'https://api.themoviedb.org/3/tv/popular?language=es-ES&page=1', [
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
                'logo' => $this->get_serie_logo($serie['id']),
            ];
        }, $limitedSeries);

        return $series;
    }

    public function get_on_the_air_series(int $num): array
    {
        $client = new GuzzleHttp\Client();

        // Obtener series top-rated
        $response = $client->request('GET', 'https://api.themoviedb.org/3/tv/on_the_air?language=es-ES&page=1&timezone=UTC', [
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
                'logo' => $this->get_serie_logo($serie['id']),
            ];
        }, $limitedSeries);

        return $series;
    }

    public function get_popular_movies(int $num): array
    {
        $client = new \GuzzleHttp\Client();

        $genres = $this->get_genres();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/popular?language=es-ES&page=1&region=es', [
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
                'logo' => $this->get_movie_logo($pelicula['id']),
            ];
        }, $limitedMovies);

        return $peliculas;
    }

}