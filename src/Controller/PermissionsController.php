<?php

namespace App\Controller;

use App\Entity\Permissions;
use App\Form\PermissionsType;
use App\Repository\PermissionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PermissionsController extends AbstractController
{#[Route('/permissions/{id}', name: 'permissions')]
public function updatePermissions($id,Permissions $permissions = null , EntityManagerInterface $entityManagerInterface, Request $request, PermissionsRepository $permissionsRepository)
   {
       $permissions = $permissionsRepository->find($id);

       $formPermissions = $this->createForm(PermissionsType::class, $permissions);
       $formPermissions->handleRequest($request);
       //si mon objet est vide je creer un nouvel objet sinon le formulaire apparait prérempli
  
       //si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
       if ($formPermissions->isSubmitted() && $formPermissions->isValid()) {
           $entityManagerInterface->persist($permissions);
           $entityManagerInterface->flush();
           $this->addFlash(type: 'success', message: 'permissions  mis à jour');
       } 
       
       return $this->render("permissions.html.twig", [
           'formPermissions' => $formPermissions->createView()
       ]);
   }

    
    
}
