<?php

namespace App\Form;

use App\Entity\Structures;
use App\Entity\Partenaires;
use App\Entity\Permissions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class StructuresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label'=> 'Nom de la structure'
            ])
            ->add('description', TextareaType::class,
            )
            ->add('statut', CheckboxType::class,[
                'label'=> 'Activer cette structure',

            ])
            ->add('perms',EntityType::class,[
                'class'=> Permissions::class,
                
                 'expanded'=> true,
                 'choice_label'=> 'name',
                 'multiple'=> true,
                 'label'=> 'Activer/désactiver des permissions',
                                
                 
             ])    
            
           ->add('partenaires', EntityType::class,[
                'class' => Partenaires::class,
                'expanded'=> true,
                 'choice_label'=> 'name',
                 'label'=>'Partenaire associé à cette structure',
                 'compound' => true
            ])
            
            
                               
   
            ->add('Modifier', SubmitType::class,[
                
            ])
        ;
                /*'expanded'=> true,
                'multiple'=> false,*/
                    
    }
                    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Structures::class,
            
        ]);
    }
}
