<?php

namespace App\Controller;

use App\Entity\Structures;
use App\Form\StructuresType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StructuresRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class AdminStructuresController extends AbstractController
{
    #[Route('/admin/structures', name: 'admin_structures')]
    public function structures (StructuresRepository $structuresRepository)
    {    $structures = $structuresRepository ->findAll();
            //envoie mon contenu de ma bdd dans la variable $strucures 
            //on affiche $partenaires dans fichier twig
     
            return $this->render("admin/structures.html.twig", [
             'structures' => $structures]);
         }
          //partie controller de la creation du moteur de recherche
#[Route("/structure/{id}", name:"structure")]
public function structure ($id,StructuresRepository $structuresRepository)
{//recupere l'article par l'id dans l'url
    $structure= $structuresRepository->find($id);
    return $this->render('admin/structure.html.twig', [
        'strucutre' => $structure
    ]);
}
//permet à l'administrateur de supprimer une structure dans la bdd
#[Route('/admin/structures/{id}/delete', name:'admin_structures_delete')]
public function deleteStructure($id, StructuresRepository $structuresRepository, EntityManagerInterface $entityManagerInterface){
$structure = $structuresRepository->find($id);
$entityManagerInterface -> remove($structure);
$entityManagerInterface -> flush();
$this -> addFlash(type:'success', message:'La structure a bien été supprimé');
return $this -> redirectToRoute('admin_structures');

}
//permet à l'administrateur de creer une entité
#[Route('/admin/structures/insert', name:'admin_insert_structure')]
public function insertStructure(Request $request, EntityManagerInterface $entityManagerInterface){
    $structure = new Structures();

    $structureForm = $this->createForm(StructuresType::class, $structure);
    $structureForm->handleRequest($request);
//si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
    if ($structureForm->isSubmitted() && $structureForm->isValid()){
        $entityManagerInterface->persist($structure);
        $entityManagerInterface->flush();
    }
    $this -> addFlash(type:'success', message:'La structure a bien été ajouté');
    return $this->render('admin/structure_insert.html.twig', [
        'structureForm' => $structureForm ->createView()
    ]);
   
}
}
