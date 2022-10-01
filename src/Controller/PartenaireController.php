<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Repository\PartenairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class PartenaireController extends AbstractController
{
    #[Route('/partenaires', name: 'partenaires')]

    //requete sql pour récupérer tous les partenaires et les afficher au public sans login
    public function partenaires(Partenaires $partenaires, PartenairesRepository $partenairesRepository)
    {
        $partenaires = $partenairesRepository->findAll();
        return $this->render('partenaires/partenaires.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }

    //moteur de recherche partenaires
    #[Route('/resultat', name:'resultat')]
    public function searchPartenaire(Request $request, PartenairesRepository $partenairesRepository)
    {
        //get ('name:input et dans l'url')
        $search = $request->query->get('search');
        $partenaire = $partenairesRepository -> search($search);
        return $this->render('admin/resultats.html.twig', [
            'partenaire' => $partenaire
        ]);
    }
}
