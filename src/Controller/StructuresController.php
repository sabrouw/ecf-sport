<?php

namespace App\Controller;

use App\Repository\StructuresRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StructuresController extends AbstractController
{
    #[Route('/structures', name: 'structures')]
    public function structures (StructuresRepository $structuresRepository)
    {    $structures = $structuresRepository ->findAll();
            //envoie mon contenu de ma bdd dans la variable $partenaires 
            //on affiche $partenaires dans fichier twig
     
            return $this->render("structures/structures.html.twig", [
             'structures' => $structures]);
         }
        
        
       
    }

