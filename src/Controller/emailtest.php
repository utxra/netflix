<?php

namespace App\Controller;

use Resend;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

require_once __DIR__ . '../../../vendor/autoload.php';


class EmailTestController extends AbstractController
{
    /**
     * @Route("/email/test", name="email_test")
     */
    public function sendEmailTest(MailerInterface $mailer)
    {
        $resend = Resend::client('re_TPPKWAXB_54DKvHzkZi2PArJyAabbQF4C');

        $result = $resend->emails->send([
            'from' => 'Acme <onboarding@resend.dev>',
            'to' => ['ruizaviles.franciscojavier@loscerros.org'],
            'subject' => 'Hello world',
            'html' => '<strong>It works!</strong>',
        ]);

        return  $result->toJson();
    }
}