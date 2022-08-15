<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminStructuresController extends AbstractController
{
    #[Route('/admin/structures', name: 'app_admin_structures')]
    public function index(): Response
    {
        return $this->render('admin_structures/index.html.twig', [
            'controller_name' => 'AdminStructuresController',
        ]);
    }
}
