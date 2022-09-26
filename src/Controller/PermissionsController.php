<?php

namespace App\Controller;

use App\Entity\Permissions;
use App\Form\PermissionsType;
use App\Repository\PermissionsRepository;
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
/*recupere une permission*/
    #[Route('/admin/permissions/{id}', name: 'admin_permission')]
    public function permission($id,PermissionsRepository $permissionsRepository): Response
    {
        $permission = $permissionsRepository->findBy($id);
        return $this->render('admin/permissions.html.twig', [
            'permission' => $permission,
        ]);
    }

 //creation du formulaires pour les permissions en boolean  
 //GET et POST 
 #[Route('/admin/permission/{id}/edit', name: 'admin_permission_edit')]
 public function updatePermissions($id,Permissions $permissions = null , EntityManagerInterface $entityManagerInterface, Request $request, PermissionsRepository $permissionsRepository)
    {
        $permissions = $permissionsRepository->find($id);

        $form = $this->createForm(PermissionsType::class, $permissions);
        $form->handleRequest($request);
        //si mon objet est vide je creer un nouvel objet sinon le formulaire apparait prérempli
   
        //si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($permissions);
            $entityManagerInterface->flush();
            $this->addFlash(type: 'success', message: 'permissions  mis à jour');
        } 
        
        return $this->render("admin/permission_edit.html.twig", [
            'form' => $form->createView()
        ]);
    }

    //creation du formulaires pour les permissions en boolean  
 //GET et POST 
 #[Route('permission/{id}/edit', name: 'permission')]
 public function updatePermission($id,Permissions $permissions = null , EntityManagerInterface $entityManagerInterface, Request $request, PermissionsRepository $permissionsRepository)
    {
        $permissions = $permissionsRepository->find($id);

        $form = $this->createForm(PermissionsType::class, $permissions);
        $form->handleRequest($request);
        //si mon objet est vide je creer un nouvel objet sinon le formulaire apparait prérempli
   
        //si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($permissions);
            $entityManagerInterface->flush();
            $this->addFlash(type: 'success', message: 'permissions  mis à jour');
        } 
        
        return $this->render("connecte.html.twig", [
            'form' => $form->createView()
        ]);
    }
}
