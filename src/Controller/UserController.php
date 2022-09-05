<?php

namespace App\Controller;


use App\Repository\PartenairesRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class UserController extends AbstractController
{
    //#[Route('/user', name: 'user')]
    //public function user(UserRepository $userRepository)
//
    //
    //{  
    //    $user = $userRepository->findAll();
    //    return $this->render('connecte.html.twig', [
    //        'user' => $user,
    //    ]);
    //}
//
    //#[Route('/partenaires/user', name: 'connecte')]
    //public function partenair(PartenairesRepository $partenairesRepository)
    //{  
    //    $partenaires = $partenairesRepository->findAll();
    //    return $this->render('connecte.html.twig', [
    //        'partenaires' => $partenaires,
    //    ]);
    //}
}
