<?php

namespace App\Form;
use App\Entity\Permissions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PermissionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('permissions', CheckboxType::class, [
                'Connection en lecture seule' => false,
                'Activation des permissions par défaut ' => false,
                'Ajouter une permissions'=> false,
                'Paiements programes' => false,
                'Consulter paiements' => false,
                'Ajouter une structure'=>false,    
           
        ]);        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Permissions::class,
        ]);
    }
}
