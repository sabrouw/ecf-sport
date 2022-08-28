<?php

namespace App\Controller;

use App\Repository\StructuresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StructureController extends AbstractController
{
    #[Route('/structures', name: 'structures')]
    
//requete sql pour récupérer tous les structures
    public function structures(StructuresRepository $structuresRepository)
    {  
        $structures = $structuresRepository->findAll();
        return $this->render('structures/structures.html.twig', [
            'structures' => $structures,
        ]);
    }
    #[Route('/structure', name: 'structure')]
    public function structure($id, StructuresRepository $structuresRepository)
    {
        $structure = $structuresRepository->find($id);
        return $this->render('structures/structure.html.twig', [
            "structure" => $structure,
        ]);
    }
/*recherche structure*/ 
    #[Route('/resultat', name:'resultat')]
    public function searchStructure(Request $request, StructuresRepository $structuresRepository)
    {
        //get ('name:input et dans l'url')
    $search = $request->query->get('search');
    $structure = $structuresRepository -> searchStructure($search);
    
        return $this->render('admin/resultatstructure.html.twig', [
            'structure' => $structure
        ]);
 }
}
