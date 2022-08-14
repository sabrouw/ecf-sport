<?php

namespace App\Form;

use App\Entity\Partenaires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartenairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //ajoute des champs a mon formulaire d'ajout d'entité
        $builder
            ->add('name')
            ->add('login')
            ->add('email_gerant')
            ->add('Password')
            ->add('adresse_postale')
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partenaires::class,
        ]);
    }
}
