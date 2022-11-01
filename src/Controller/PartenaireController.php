<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Repository\PartenairesRepository;
use Doctrine\ORM\EntityManager;
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
    #[Route('/activite/{id}', name: 'activite')]

    //requete sql pour récupérer tous les partenaires et les afficher au public sans login
    public function partenaireActif($id, EntityManager $entityManager, Request $request, Partenaires $partenaires, PartenairesRepository $partenairesRepository)
    {   
        $partenaires = $partenairesRepository->find($id);
        $form = $this->createForm(PartenaireActiveType::class, $partenaires);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager->persist($partenaires);
            $entityManager->flush();

        return $this->render('admin/activite.html.twig', [
            'formActivePartenaire'=>$form->createView()
        ]);
    }

} 
    
}
