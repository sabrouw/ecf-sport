<?php

namespace App\Controller;

use App\Repository\PartenairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class PartenaireController extends AbstractController
{#[Route('/partenaires', name: 'partenaires')]
    
//requete sql pour récupérer tous les articles
    public function partenaires(PartenairesRepository $partenairesRepository)
    {  
        $partenaires = $partenairesRepository->findAll();
        return $this->render('partenaires/partenaires.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }
    #[Route("/partenaires/{id}", name:"partenaires")]
//requete pour récuperer un seul partenaire de notre bdd
    public function partenaire($id, PartenairesRepository $partenairesRepository)
    {
        $partenaire = $partenairesRepository->find($id);
        return $this->render('partenaires/partenaire.html.twig', [
            "partenaire" => $partenaire,
        ]);
    }

    //
    #[Route('/resultat', name:'resultat')]
    public function searchPartenaire(Request $request, PartenairesRepository $partenairesRepository)
    {
        //get ('name:input et dans l'url')
    $search = $request->query->get('search');
    $partenaire = $partenairesRepository -> searchPartenaire($search);
    
        return $this->render('admin/resultatpartenaire.html.twig', [
            'partenaires' => $partenaire
        ]);
 }
}
