<?php

namespace App\Controller;


use App\Repository\StructuresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StructureController extends AbstractController
{
    #[Route('/structure/{id}', name: 'structure')]
    public function structure($id, StructuresRepository $structuresRepository)
    {
        $structure = $structuresRepository->find($id);
        return $this->render('structures/structure.html.twig', [
            "structure" => $structure,
        ]);
    }

}
