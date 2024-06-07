<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface; // Add this line
use Symfony\Component\Security\Http\Attribute\IsGranted;

class NotVerifiedEmailController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/not/verified/email', name: 'app_not_verified_email')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }

        if ($user->getIsVerified()){
            return $this->redirectToRoute('app_home');
        }

        return $this->render('not_verified_email/index.html.twig', [
            'controller_name' => 'NotVerifiedEmailController',
        ]);
    }
}
