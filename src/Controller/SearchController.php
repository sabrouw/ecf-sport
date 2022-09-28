<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Entity\Structures;
use App\Repository\PartenairesRepository;
use App\Repository\StructuresRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/recherche', name: 'recherche')]
    public function recherche(PartenairesRepository $partenaireRepo, StructuresRepository $structureRepo): Response
    {
        $partenaire = $partenaireRepo;
        $structure = $structureRepo;
         $form = $this->createFormBuilder()
        
        ->add('Structure', EntityType::class,[
               'class'     => Structures::class,
                 'expanded'     => false,
                 'required'     => false,
                 'multiple'     => true,
                 'choice_label'  =>'name',
                 'attr' => [
                     'class'=> 'select2'
                    ]
                    
                 ]) 
                 
        ->add('activite', CheckboxType::class,[
            'label'  =>'Afficher uniquement les Structures actives',
            'attr' => ['class' => 'active'],

            'required' => false,
            

        ] )    
        
        ->add('Partenaire', EntityType::class,[
            'class' => Partenaires::class,
            'expanded'     => false,
            'required'     => false,
            'multiple'     => true,
            'choice_label'  =>'name',
            'attr' => [
                'class'=> 'select2', 'active'
                               ]
            ])
            ->add('statut', CheckboxType::class,[
                'label'  =>'afficher uniquement les Partenaires actifs',
                'required' => false,
                
    
            ] )    
        ->add('rechercher', SubmitType::class)
        ->setMethod('GET')
        ->getForm()
    ;
if ($form->isSubmitted() && $form->isValid()) {
    // encoder mot de passe entré

    $resultat = $form->getData();
    return $this->redirectToRoute('resultats.html.twig', [
        'partenaire' => $partenaire,
        'structure'  => $structure
        ]);
}
else      {   
        

return $this->renderForm('recherche.html.twig',[
    'form' => $form,
    'partenaire' => $partenaire,
    'structure'  => $structure
]);}   
        
    }

#[Route('resultats/{id}', name:'resultats')]    
public function resultatSearch($id, PartenairesRepository $partenairesRepository,StructuresRepository $structuresRepository ){
    $partenaire = $partenairesRepository->findBy($id);
    $structure = $structuresRepository->findBy($id);
    return $this->render('resultats.html.twig', [
        'partenaire' => $partenaire,
        'structure' => $structure,

    ]);




}
}
       
   

    

