<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Entity\Structures;
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
    #[Route('/recherche', name: 'recherche')]
    public function recherche(PartenairesRepository $partenaireRepo, StructuresRepository $structureRepo, Request $request): Response
    {
   
        $partenaire = $partenaireRepo;
        $structure = $structureRepo;
        $form = $this->createFormBuilder()

    ->add('Structure', EntityType::class, [

           'class'     => Structures::class,
             'query_builder'=> function (StructuresRepository $structureRepo) {
                 return $structureRepo->createQueryBuilder('s')->orderBy('s.name', 'ASC');
             },
             'expanded'     => false,
             'required'     => false,
             'multiple'     => true,
             'choice_label'  =>'name',
             'attr' => [
                 'class'=> 'select2'
                ]

             ])

    ->add('activite', ChoiceType::class, [
            'label'  =>'Afficher uniquement les Structures actives',
            'choices'=>[
                'Actif'=> true,
                'Inactif'=>false
            ],
            'required' => false,
            'compound'=> true,
            'expanded'=> true,

        ])

    ->add('Partenaire', EntityType::class, [
            'placeholder'=>'franchisé',
            'class' => Partenaires::class,
            'query_builder'=> function (PartenairesRepository $partenaireRepo) {
                return $partenaireRepo->createQueryBuilder('p')->orderBy('p.name', 'ASC');
            },
            'expanded'     => false,
            'required'     => false,
            'multiple'     => true,
            'choice_label'  =>'name',
            'attr' => [
                'class'=> 'select2', 'active'
                           ]
            ])
        ->add('statut', ChoiceType::class, [
               'label'  =>'afficher uniquement les Partenaires actifs',
               'required' => false,
               'choices'=>[
                'Actif'=> true,
                'Inactif'=>false
            ],
            'required' => false,
            'compound'=> true,
            'expanded'=> true,

            ])

    ->add('rechercher', SubmitType::class)

    ->setMethod('GET')
    ->getForm()

    ;

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
       $criteria = $form->getData();
      
       $partenaireRepo->recherche($criteria);
       //$structureRepo->recherche($criteria);
      
       
    }



    return $this->renderForm('recherche.html.twig', [
    'form' => $form,
    'partenaire' => $partenaire,
    'structure'  => $structure
    ]);
}


//#[Route('resultats/{id}', name:'resultats')]
//public function resultatSearch($id, PartenairesRepository $partenairesRepository,StructuresRepository $structuresRepository ){
//$partenaire = $partenairesRepository->findBy($id);
//$structure = $structuresRepository->findBy($id);
//return $this->render('resultats.html.twig', [
//    'partenaire' => $partenaire,
//    'structure' => $structure,
//]);
//}
}


       
   

    

