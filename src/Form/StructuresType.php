<?php

namespace App\Form;

use App\Entity\Structures;
use App\Entity\Partenaires;
use App\Entity\Permissions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StructuresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('statut')
            /*->add('perms',EntityType::class,[
                'class'=> Permissions::class,
                
                 'expanded'=> true,
                 'choice_label'=> 'name',
                 'required' => false,
                 'compound' => true,
             ])    */
            /*->add('permission1',ChoiceType::class,[
                'choices'=> [
                    'activite'=> true,
                    'desactiver'=> false],
                    'expanded'=> true,
                    'label'=>'Connection et lecture seule',

                    ])    
            ->add('permission2',ChoiceType::class,[
                'choices'=> [
                    'activer'=> true,
                    'desactiver'=> false],
                    'expanded'=> true,
                    'label'=>'Consulter prélèvements '
                    ])    
            ->add('permission3', ChoiceType::class,[
                'choices'=> [
                    'activer'=> true,
                    'desactiver'=> false],
                    'expanded'=> true,
                    'label'=>'Modification option par défaut'
                    ])    
            ->add('permission4',ChoiceType::class,[
                'choices'=> [
                    'activer'=> true,
                    'desactiver'=> false],
                    'expanded'=> true,
                    'label'=>'Voir les paiements programmés'
                    ])    
            ->add('statut')
            /*->add('permission5', ChoiceType::class,[
                'choices'=> [
                    'activer'=> true,
                    'desactiver'=> false],
                    'expanded'=> true,
                    'label'=>'d'
                    
                    ])    
                
                
            
                /*'expanded'=> true,
                'multiple'=> false,
                'required'=> true,
                )*/
                
               
           ->add('partenaires', EntityType::class,[
                'class' => Partenaires::class,
                'expanded'=> true,
                 'choice_label'=> 'name',
                 'required' => false,
                 'compound' => true
            ])
            
            
                               
   
            ->add('submit', SubmitType::class)
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
