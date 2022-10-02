<?php

namespace App\Controller;

use App\Repository\PartenairesRepository;
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

}
