<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    
    public function index(AuthenticationUtils $authenticationUtils): Response
    {   
        $error = $authenticationUtils->getLastAuthenticationError();   
        $lastUsername = $authenticationUtils->getLastUsername();
        
        $this -> addFlash(type:'success', message:'Vous etes connecté');
        return $this->render('login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    #[Route('/logout', name:'logout')]
    public function logout():Response
    {
        $this -> addFlash(type:'success', message:'Vous etes déconnecté');
        return $this -> redirectToRoute('home');
    }
}
