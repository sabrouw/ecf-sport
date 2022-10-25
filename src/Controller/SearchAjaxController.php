<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PartenairesRepository;
use App\Repository\StructuresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[IsGranted("ROLE_ADMIN")]
class SearchAjaxController extends AbstractController
{#[Route('/admin/recherche-predictive', name:'admin_recherche_predictive')]
    public function searchTout(CategorieRepository $categorieRepo,Request $request, PartenairesRepository $partenairesRepository, StructuresRepository $structuresRepository)
    {
    
    
    $categorie = $categorieRepo->findAll();
    
    $search = $request->query->get('search');
    $structure = $structuresRepository -> search($search);
    $partenaire = $partenairesRepository -> search($search);
    $this -> addFlash(type:'success', message:'Voici le résultat de votre recherche');
        return $this->render('admin/recherche.html.twig', [
            'structures' => $structure,
            'partenaires'=>$partenaire,
            'categorie'=>$categorie,
            
        ]);
    }
    }