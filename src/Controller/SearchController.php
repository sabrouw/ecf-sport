<?php

namespace App\Controller;


use App\Form\SearchFormType;

use App\Repository\CategorieRepository;
use App\Repository\PartenairesRepository;
use App\Repository\StructuresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
   /*moteur de recherche public*/
#[Route('/resultat', name:'resultat')]
public function search(CategorieRepository $categorieRepo,Request $request, PartenairesRepository $partenairesRepository, StructuresRepository $structuresRepository)
{
$categorie = $categorieRepo->findAll();

$search = $request->query->get('search');
$structure = $structuresRepository -> search($search);
$partenaire = $partenairesRepository -> search($search);
$this -> addFlash(type:'success', message:'Voici le résultat de votre recherche');
    return $this->render('resultats.html.twig', [
        'structures' => $structure,
        'partenaires'=>$partenaire,
        'categorie'=>$categorie
    ]);
}

#[Route('/admin/resultats', name:'admin_resultats')]
public function searchAdmin(CategorieRepository $categorieRepo,Request $request, PartenairesRepository $partenairesRepository, StructuresRepository $structuresRepository)
{
$categorie = $categorieRepo->findAll();
$search = $request->query->get('search');
$structure = $structuresRepository -> search($search);
$partenaire = $partenairesRepository -> search($search);
$this -> addFlash(type:'success', message:'Résultat de recherche');
    return $this->render('admin/resultats.html.twig', [
        'structures' => $structure,
        'partenaires'=>$partenaire,
        'categorie'=>$categorie
    ]);
}

}







       
   

    

