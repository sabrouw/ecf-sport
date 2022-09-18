<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/recherche', name: 'recherche')]
    public function recherche(Request $request): Response
    {
        $partenaire = new Partenaires();
        //creer un formulaire par le biais du SearchTypeType
        $rechercheForm = $this->createForm(SearchType::class, $partenaire);
        $rechercheForm->handleRequest($request);
        
        return $this->render('recherche.html.twig', [
            'rechercheForm' => $rechercheForm->createView()
        ]);
    }
       
   

    
}
