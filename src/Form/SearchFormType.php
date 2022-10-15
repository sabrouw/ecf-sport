<?php

namespace App\Form;

use App\Entity\Partenaires;
use App\Entity\Structures;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', EntityType::class, [
            'class'=> Partenaires::class,
            'label' => 'name',
            
            
            ]
        )
        ->add('name', EntityType::class, [
            'class'=> Structures::class,
            'label' => 'name'
            
        
            ])

        ->add('Rechercher', SubmitType::class)
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
