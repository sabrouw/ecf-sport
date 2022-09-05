<?php

namespace App\Controller;

use App\Entity\Permissions;
use App\Form\PermissionsType;
use App\Repository\PermissionsRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Boolean;
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
    #[Route('/permissions/{id}', name: 'permission')]
    public function permission($id,PermissionsRepository $permissionsRepository): Response
    {
        $permissions = $permissionsRepository->findBy($id);
        return $this->render('permission.html.twig', [
            'permissions' => $permissions,
        ]);
    }

 //creation du formulaires pour les permissions en bool  
 //GET et POST 
    #[Route('/admin/permissions', name: 'permissionsForm', methods:['POST'])]
    public function permissionsForm(Request $request): Response 
    {
       
       $permissions=$request->get(key:"permissions[]");
        return $this->render('admin/permissions.html.twig', [
            'permissions' => $permissions
        ]);
        
    }
}
