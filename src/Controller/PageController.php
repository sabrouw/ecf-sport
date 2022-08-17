<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {    
        
        return $this->render('home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/admin/home', name: 'admin_home')]
    public function adminHome(): Response
    {
        return $this->render('admin/base.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
