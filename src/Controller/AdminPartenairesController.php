<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Form\PartenairesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PartenairesRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class AdminPartenairesController extends AbstractController
{    
#[Route("/admin/partenaires", name:"admin_partenaires")]
//instance de classe avec partenairesRepository en paramètre autowire
    public function adminPartenaires (PartenairesRepository $partenairesRepository)
    {//Repository permet de faire des requetes sql en bdd avec findAll()
       $partenaires = $partenairesRepository->findAll();
       //envoie mon contenu de ma bdd dans la variable $partenaires 
       //on affiche $partenaires dans fichier twig

       return $this->render("admin/partenaires.html.twig", [
        'partenaires' => $partenaires]);
    }
    //partie controller de la creation du moteur de recherche
#[Route("/partenaire/{id}", name:"partenaire")]
    public function partenaire ($id, PartenairesRepository $partenairesRepository)
    {//recupere l'article par l'id dans l'url
        $partenaire = $partenairesRepository->find($id);
        return $this->render('partenaire.html.twig', [
            'partenaire' => $partenaire
        ]);
    }
//permet à l'administrateur de supprimer un partenaire dans la bdd
    #[Route('/admin/partenaires/{id}/delete', name:'admin_partenaires_delete')]
    public function deletePartenaire($id, PartenairesRepository $partenairesRepository, EntityManagerInterface $entityManagerInterface){
    $partenaire = $partenairesRepository->find($id);
   
}
//permet à l'administrateur de creer une entité
#[Route('/admin/partenaires/insert', name:'admin_insert_partenaire')]
    public function insertPartenaire(Request $request, EntityManagerInterface $entityManagerInterface){
        $partenaire = new Partenaires();
//creer un formulaire par le biais du partenaireType
        $partenaireForm = $this->createForm(PartenairesType::class, $partenaire);
        $partenaireForm->handleRequest($request);
//si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
        if ($partenaireForm->isSubmitted()&&$partenaireForm->isValid()){
            $entityManagerInterface->persist($partenaire);
            $entityManagerInterface->flush();
        }

        return $this->render('admin/partenaires_insert.html.twig', [
            'partenaireForm' => $partenaireForm ->createView()
        ]);
       
    }
}