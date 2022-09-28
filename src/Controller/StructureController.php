<?php

namespace App\Controller;

use App\Repository\StructuresRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StructureController extends AbstractController
{
   
    //#[Security("is_granted('ROLE_STRUCTURES') and user === structure.getStructures()")]
    #[Route('/structure/{id}', name: 'structure')]
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
    $this -> addFlash(type:'success', message:'Merci pour votre recherche, voici le résultat');
        return $this->render('admin/resultatstructure.html.twig', [
            'structure' => $structure
        ]);
 }
}
