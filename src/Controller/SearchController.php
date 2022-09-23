<?php

namespace App\Controller;

use App\Entity\Partenaires;
use App\Entity\Structures;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/recherche', name: 'recherche')]
    public function recherche(): Response
    {
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
            
        
        ->add('Partenaire', EntityType::class,[
            'class' => Partenaires::class,
            'expanded'     => false,
            'required'     => false,
            'multiple'     => true,
            'choice_label'  =>'name',
            'attr' => [
                'class'=> 'select2'
               ]
            ])
        ->add('rechercher', SubmitType::class)
        
        ->getForm()
    ;

return $this->renderForm('recherche.html.twig',[
    'form' => $form
]);
        
    }}
       
   

    

