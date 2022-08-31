<?php

namespace App\Form;
use App\Entity\Permissions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PermissionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class)
        ->add('description', TextType::class)
        ->add('activite', CheckboxType::class)
        ->add('Valider', SubmitType::class);
                   
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Utilisation de classe permissions ainsi que le bouleen pour checkbox
            'data_class' => Permissions::class
            
        ]);
    }
}
