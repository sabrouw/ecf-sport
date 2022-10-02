<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Entity\Structures;
use App\Repository\CategorieRepository;
use App\Repository\PartenairesRepository;
use App\Repository\StructuresRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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







       
   

    

