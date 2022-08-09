<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PartenairesRepository;

class AdminPartenairesController extends AbstractController
{    
#[Route("/admin/partenaires", name:"admin_partenaires")]
    public function adminPartenaires (PartenairesRepository $partenairesRepository)
    {
       $partenaires = $partenairesRepository->findAll();
       return $this->render("admin/partenaires.html.twig", [
        'partenaires' => $partenaires]);
    }
}