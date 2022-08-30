<?php

namespace App\Controller;

use App\Entity\Permissions;
use App\Form\PermissionsType;
use App\Repository\PermissionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*récupère toute les permissions*/
class PermissionsController extends AbstractController
{
    #[Route('/permissions', name: 'permissions')]
    public function permissions(Request $request ,PermissionsRepository $permissionsRepository): Response
    {
        $permissions = $permissionsRepository->findAll();
        return $this->render('permissions.html.twig', [
            'permissions' => $permissions,
        ]);
    }
    #[Route('/admin/permissions', name: 'admin_permissions')]
    public function permissionsForm(Request $request ,PermissionsRepository $permissionsRepository): Response
    {
        $permissions = $permissionsRepository->findAll();
        $permissions = new Permissions();
        $form = $this->createForm(PermissionsType::class, $permissions);
        $form->handleRequest($request);
        return $this->render('admin/permissions.html.twig', [
            'permissions' => $permissions,
        ]);
    }
}
