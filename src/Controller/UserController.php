<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    public function update(Request $request, User $passwordEnconder): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }

        $data = json_decode($request->getContent(), true);

        $user = $this->getUser();
        $user->set($data['nombre']);
        $user->setEmail($data['email']);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('Usuario actualizado con éxito');
    }
}
