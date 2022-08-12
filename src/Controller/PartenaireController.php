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
        return $this->render('partenaires.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }
    #[Route("/partenaires/{id}", name:"partenaires")]
//requete pour récuperer un seul partenaire de notre bdd
    public function partenaire($id, PartenairesRepository $partenairesRepository)
    {
        $partenaire = $partenairesRepository->find($id);
        return $this->render('partenaire.html.twig', [
            "partenaire" => $partenaire,
        ]);
    }

    public function searchPartenaire(Request $request)
    {$search = $request->query->get('résultat_recherche');
 }
}
