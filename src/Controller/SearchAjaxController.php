<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PartenairesRepository;
use App\Repository\StructuresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchAjaxController extends AbstractController
{#[Route('/recherche', name:'recherche')]
    public function searchTout(CategorieRepository $categorieRepo,Request $request, PartenairesRepository $partenairesRepository, StructuresRepository $structuresRepository)
    {
    
    
    $categorie = $categorieRepo->findAll();
    
    $search = $request->query->get('search');
    $structure = $structuresRepository -> search($search);
    $partenaire = $partenairesRepository -> search($search);
    $this -> addFlash(type:'success', message:'Voici le résultat de votre recherche');
        return $this->render('admimn/recherche.html.twig', [
            'structures' => $structure,
            'partenaires'=>$partenaire,
            'categorie'=>$categorie,
            
        ]);
    }
    }