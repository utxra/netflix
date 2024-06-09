<?php

namespace App\Controller;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Service\HomeService;

class HomeController extends AbstractDashboardController
{
    private $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

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
                'top_rated_peliculas' => $this->homeService->get_top_movies(5),
                'top_rated_series' => $this->homeService->get_series(5),
                'banner_movie' => $this->homeService->get_banner_movie(),
            ]),
            $user->getIsVerified() === false => $this->redirectToRoute('app_not_verified_email'),
        };
    }
}
