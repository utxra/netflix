<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use Doctrine\Common\Lexer\Token;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Resend;

class RegistrationController extends AbstractController
{
    private $entityManager;
    private $tokenGenerator;

    public function __construct(EntityManagerInterface $entityManager, TokenGeneratorInterface $tokenGenerator)
    {
            $this->entityManager = $entityManager;
            $this->tokenGenerator = $tokenGenerator;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager, MailerInterface $mailer): Response    
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

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

            // set the roles
            $user->setRoles(['ROLE_USER']);

            $user->setAvatar($form->get('avatar')->getData());

            // generate a verification token
            $user->setVerificationToken($this->tokenGenerator->generateToken());

            $user->setIsVerified(false);

            // Add some logging
            error_log(print_r($user, true));
            error_log(print_r($user->getVerificationToken(), true));


            $entityManager->persist($user);
            $entityManager->flush();

            // generate the template email with Twig

            $emailHtml = $this->renderView('registration/confirmation_email.html.twig', [
                'user' => $user->getNombre(),
                'token' => $user->getVerificationToken(),
                'email' => $user->getEmail(),
            ]);

            $resend = Resend::client('re_TPPKWAXB_54DKvHzkZi2PArJyAabbQF4C');
            
            
            $result = $resend->emails->send([
                'from' => 'Netflix Mail Bot <noreply@franruiz.dev>',
                'to' => [$user->getEmail()],
                'subject' => 'Confirma tu correo electrónico',
                'html' => $emailHtml,
            ]);

            // do anything else you need here, like send an email

            return $security->login($user, 'form_login', 'main');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
}
