<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PartenairesRepository;

class AdminPartenairesController extends AbstractController
{    
#[Route("/admin/partenaires", name:"admin_partenaires")]
//instance de classe avec partenairesRepository en paramètre autowire
    public function adminPartenaires (PartenairesRepository $partenairesRepository)
    {//Repository permet de faire des requetes sql en bdd avec findAll()
       $partenaires = $partenairesRepository->findAll();
       //envoie mon contenu de ma bdd dans la variable $partenaires 
       //on affiche $partenaires dans fichier twig

       return $this->render("admin/partenaires.html.twig", [
        'partenaires' => $partenaires]);
    }
#[Route("/partenaire/{id}", name:"partenaire")]
    public function partenaire ($id, PartenairesRepository $partenairesRepository)
    {//recupere l'article par l'id dans l'url
        $partenaire = $partenairesRepository->find($id);
        return $this->render('partenaire.html.twig', [
            'partenaire' => $partenaire
        ]);
    }
}