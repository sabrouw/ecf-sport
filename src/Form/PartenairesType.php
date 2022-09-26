<?php

namespace App\Form;

use App\Entity\Partenaires;
use App\Entity\Permissions;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('adresse')
            ->add('statut')
            ->add('permission1',EntityType::class,[
               'class'=> Permissions::class,
               
                'expanded'=> true,
                'choice_label'=> 'name',
                'required' => false,
                'compound' => true,
            ])    
            /*->add('permission2',ChoiceType::class,[
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
            /*->add('permission5', ChoiceType::class,[
                'choices'=> [
                    'activer'=> true,
                    'desactiver'=> false],
                    'expanded'=> true,
                    'label'=>'d'
                    
                    ])    */
                
                
            
                /*'expanded'=> true,
                'multiple'=> false,
                'required'=> true,
                )*/
                
               
            
            
           
            
            
                               
   
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
