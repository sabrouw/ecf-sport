<?php

namespace App\Controller;

use App\Repository\PartenairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/connecte', name: 'connecte')]


class ConnecteController extends AbstractController
{
    
    public function partenaireConnecte(PartenairesRepository $partenairesRepository): Response
    {


        $partenaire = $partenairesRepository->find();
        return $this->render('connecte.html.twig', [
            'partenaire' => $partenaire,
        ]);
    }

}
