<?php

namespace App\Form;

use App\Entity\Permissions;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder 
            ->add('name',EntityType::class,[
                'class'=> Permissions::class,
                'expanded'     => true,
            'required'     => false,
            'multiple'     => true,
            'choice_label'  =>'name',
            "empty_data"         => [],
           
            ])
            ->add('description')
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Permissions::class,
        ]);
    }
}
