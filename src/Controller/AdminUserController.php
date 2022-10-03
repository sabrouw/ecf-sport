<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AdminUserController extends AbstractController
{
    #[Route('/admin/users', name: 'admin_users')]
    public function adminUser(UserRepository $userRepository)
    {        $user = $userRepository->findAll();
       return $this->render("admin/users.html.twig", [
        'user' => $user
    ]);
    }

}
