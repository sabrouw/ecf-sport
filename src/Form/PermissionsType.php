<?php

namespace App\Form;

use App\Entity\Permissions;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder 
        ->add('name', TextType::class,[
            'label'=>'Nom de la permission',
        ])
        ->add('activite')
        ->add('description')     
        ->add('valider', SubmitType::class,[
            'attr'=>['class'=>'btn-submit']
        ])  
            
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Permissions::class,
        ]);
    }
}
