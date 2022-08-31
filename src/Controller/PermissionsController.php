<?php

namespace App\Controller;

use App\Entity\Permissions;
use App\Form\PermissionsType;
use App\Repository\PermissionsRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*récupère toute les permissions*/
class PermissionsController extends AbstractController
{
    #[Route('/permissions', name: 'permissions')]
    public function permissions(PermissionsRepository $permissionsRepository): Response
    {
        $permissions = $permissionsRepository->findAll();
        return $this->render('permissions.html.twig', [
            'permissions' => $permissions,
        ]);
    }

 //creation du formulaires pour les permissions en bool  
 //GET et POST 
    #[Route('/admin/permissions', name: 'admin_permissions', methods:['GET', 'POST'])]
    public function permissionsForm(Request $request ,EntityManagerInterface $entityManager): Response
    {
       
        $permissions = new Permissions();
        $permissionsform = $this->createForm(PermissionsType::class, $permissions);
        $permissionsform->handleRequest($request);
        return $this->render('admin/permissions.html.twig', [
            'permissionsform' => $permissionsform->createView(),
        ]);
        $entityManager->persist($permissions);
            $entityManager->flush();
    }
}
