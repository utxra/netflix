<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class PlayerController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/player', name: 'app_player')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }

        return $this->render('player/index.html.twig', [
            'avatar' => $user->getAvatarUrl(),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/player/m/{id}', name: 'app_player_movies')]
    public function movies(int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', "https://api.themoviedb.org/3/movie/{$id}/videos?language=es-ES", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYmZkMTg3NjMwZjg4ODYxMGMxNWYwODMzYThkN2I5OSIsInN1YiI6IjY2NjE5ODNiYjc5YmVjMzA5ZDAwYmYwNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.b51Uf9foDUGRXv2HJNkwimH6BDiBkvVKy1ez8i8tJv4',
                'accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $video = $data['results'][0]['key'];

        dump($data);

        return $this->render('player/index.html.twig', [
            'id' => $id,
            'video' => $video,
        ]);
    }
}
