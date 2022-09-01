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
    #[Route('/admin/permissions', name: 'admin_permissions')]
    public function permissions(PermissionsRepository $permissionsRepository): Response
    {
        $permissions = $permissionsRepository->findAll();
        return $this->render('admin/permissions.html.twig', [
            'permissions' => $permissions,
        ]);
    }

 //creation du formulaires pour les permissions en bool  
 //GET et POST 
    #[Route('/admin/permissions', name: 'admin_permissions_form', methods:['GET', 'POST'])]
    public function permissionsForm(Request $request ,EntityManagerInterface $entityManager): Response
    {
       
        $permissions = new Permissions();
        $permissionsForm = $this->createForm(PermissionsType::class, $permissions);
        $permissionsForm->handleRequest($request);
        return $this->render('admin/permissions.html.twig', [
            'permissionsForm' => $permissionsForm->createView(),
        ]);
        $entityManager->persist($permissions);
            $entityManager->flush();
    }
}
