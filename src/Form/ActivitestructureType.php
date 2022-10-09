<?php

namespace App\Form;

use App\Entity\Structures;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitestructureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('statut')
            ->add('categorie')
            ->add('user')
            ->add('permission1')
            ->add('permission2')
            ->add('permission3')
            ->add('permission4')
            ->add('permission5')
            ->add('partenaires')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Structures::class,
        ]);
    }
}
