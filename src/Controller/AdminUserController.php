<?php

namespace App\Controller;

use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[IsGranted("ROLE_ADMIN")]
class AdminUserController extends AbstractController
{
    #[Route('/admin/users', name: 'admin_users')]
    public function adminUser(UserRepository $userRepository)
    {        $user = $userRepository->findAll();
       return $this->render("admin/users.html.twig", [
        'user' => $user
    ]);
    }
/*modifier user */
#[Route("/admin/users/{id}/edit", name: "admin_users_edit")]
    public function adminUserEdit($id, UserRepository $userRepository, Request $request,  EntityManagerInterface $entityManagerInterface)
    {       $user = $userRepository->find($id);
            $userForm = $this->createForm(RegistrationFormType::class, $user);
            $userForm->handleRequest($request);
        //si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();
            $this->addFlash(type: 'success', message: 'utilisateur mis a jour avec succes');
        }  
       return $this->render("admin/users_edit.html.twig", [
        'userForm' => $userForm->createView()
    ]);
    }
}
