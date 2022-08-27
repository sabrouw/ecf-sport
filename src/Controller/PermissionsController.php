<?php

namespace App\Controller;

use App\Repository\PermissionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*récupère toute les permissions*/
class PermissionsController extends AbstractController
{
    #[Route('/permissions', name: 'permissions')]
    public function index(PermissionsRepository $permissionsRepository ): Response
    { $permissions = $permissionsRepository->findAll();
        return $this->render('permissions.html.twig', [
            'permissions' => $permissions,
        ]);
    }
}
