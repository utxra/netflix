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
        
        dump($user->getAvatarUrl());

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
