<?php

namespace App\Form;

use App\Entity\Structures;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StructuresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            
            ->add('permission1', ChoiceType::class, [
                'choices'  => array(
                        'activé'        => true,
                        'désactive'     => false 
                ),      
                'expanded'      => true,
                'multiple'      => false 
            ])
            ->add('permission3', ChoiceType::class, [
                'choices'  => array(
                    'activé'        => true,
                    'désactive'     => false 
                    
                ),
                'expanded'      => true,
                'multiple'      => false  
                      
                ]   
            )
            ->add('permission4', ChoiceType::class, [
                'choices'  => array(
                    'activé'        => true,
                    'désactive'     => false 
                ),
                'expanded'      => true,
                'multiple'      => false  
                      
                ]   
            )
            ->add('permission5', ChoiceType::class, [
                'choices'  => array(
                    'activé'        => true,
                    'désactive'     => false 
                ),
                'expanded'      => true,
                'multiple'      => false  
                      
                ]   
            )
            ->add('submit', SubmitType::class)
            ;                   
   
                    
    }
                    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Structures::class,
            
        ]);
    }
}
