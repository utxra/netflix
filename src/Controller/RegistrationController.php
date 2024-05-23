<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;



class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, ParameterBagInterface $param): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // generate a verification token
            $token = bin2hex(random_bytes(32));
            $user->setVerificationToken($token);

            $entityManager->persist($user);
            $entityManager->flush();

            // send verification email

            $api_key = $param->get('resend_api_key');

            $resend = Resend::client($api_key);

            try {
                $result = $resend->emails->send([
                    'from' => 'Administracion <administracion@franruiz.dev>',
                    'to' => ['trxpute@gmail.com'],
                    'subject' => 'Hello world',
                    'html' => '<strong>It works!</strong>',
                ]);
            } catch (\Exception $e) {
                exit('Error: ' . $e->getMessage());
            }

            // Show the response of the sent email to be saved in a log...
            echo $result->toJson();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
}
