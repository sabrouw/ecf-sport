<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Repository\PartenairesRepository;
use App\Repository\StructuresRepository;
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

    
    
}
