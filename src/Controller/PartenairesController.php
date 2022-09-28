<?php

namespace App\Controller;


use App\Repository\PartenairesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PartenairesController extends AbstractController
{#[Route("/partenaires", name:"partenaires")]
    public function partenaires (PartenairesRepository $partenairesRepository)
    { //Repository permet de faire des requetes sql en bdd avec la methode findAll() obtenue par repository
       $partenaires = $partenairesRepository->findAll();
       //envoie mon contenu de ma bdd dans la variable $partenaires 
       //on affiche $partenaires dans fichier twig

       return $this->render("partenaires/partenaires.html.twig", [
        'partenaires' => $partenaires]);
    }
    



   

}
