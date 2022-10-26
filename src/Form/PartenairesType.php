<?php

namespace App\Form;

use App\Entity\Partenaires;
use App\Entity\Permissions;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartenairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //ajoute des champs a mon formulaire d'ajout d'entité
        $builder
            ->add('name', TextType::class,[
                'label'=> 'Nom du partenaire',
            ])
            ->add('adresse')
            ->add('statut', CheckboxType::class,[
                'label'=> 'Activer ce partenaire',

            ])
            ->add('permissions',EntityType::class,[
               'class'=> Permissions::class,
               
                'expanded'=> true,
                'choice_label'=> 'name',
                'multiple'=> true,
                'label'=> 'Activer des permissions',
                               
                
            ])    
           
                    
            
           
            
            
                               
   
            ->add('submit', SubmitType::class,[
                'attr'=>['class'=>'btn-submit']
            ])
        ;
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            
        ]);
    }
}
