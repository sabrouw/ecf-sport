<?php

namespace App\Controller;


use App\Repository\PartenairesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

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
    
    /*page de partenaire publi*/
#[Route('/partenaire_public', name: 'partenaire_public')]
public function publicPartenaire(PartenairesRepository $partenairesRepository): Response
{  $partenaires = $partenairesRepository->findAll();
    return $this->render('partenaire_public.html.twig', [
        'partenaires' => $partenaires,
    ]);
}


   

}
