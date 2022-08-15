<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_registration')]
    public function index(): Response
    {
        return $this->render('registration.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
    public function hashPassword(UserPasswordHasherInterface $passwordHasher) {
        // ... e.g. get the user data from a registration form
        //$user = new User(...);
        //$plaintextPassword = ...;

        // hash the password (based on the security.yaml config for the $user class)
        //$hashedPassword = $passwordHasher->hashPassword(
           // $user,
           // $plaintextPassword
        //);
        //$user->setPassword($hashedPassword);

    }
}
