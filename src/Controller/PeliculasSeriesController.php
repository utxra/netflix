<?php

namespace App\Controller;

use App\Service\HomeService;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class PeliculasSeriesController extends AbstractController
{
    private $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/peliculas', name: 'app_peliculas')]
    public function peliculas(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }

        return match (true) {
            $user->getIsVerified() => $this->render('peliculas/index.html.twig', [
                'avatar' => $user->getAvatarUrl(),
                'top_rated_peliculas' => $this->homeService->get_top_movies(10),
                'now_playing_peliculas' => $this->homeService->get_now_playing_movies(10),
                'banner_movie' => $this->homeService->get_banner_movie(),
                'popular_peliculas' => $this->homeService->get_popular_movies(10),
            ]),
            $user->getIsVerified() === false => $this->redirectToRoute('app_not_verified_email'),
        };

    }

    #[IsGranted('ROLE_USER')]
    #[Route('/series', name: 'app_series')]
    public function series(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }

        return match (true) {
            $user->getIsVerified() => $this->render('series/index.html.twig', [
                'avatar' => $user->getAvatarUrl(),
                'top_rated_series' => $this->homeService->get_series(10),
                'popular_series' => $this->homeService->get_popular_series(10),
                'on_the_air_series' => $this->homeService->get_on_the_air_series(10),
                'banner_serie' => $this->homeService->get_banner_serie(),
            ]),
            $user->getIsVerified() === false => $this->redirectToRoute('app_not_verified_email'),
        };

    }
}
