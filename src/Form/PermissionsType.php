<?php

namespace App\Form;
use App\Entity\Permissions;
use Laminas\Code\Generator\EnumGenerator\Name;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;

class PermissionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder->add('permissions', EntityType::class, [
            // looks for choices from this entity
            'class' => permissions::class,
        
            // propriété de permissions
            'choice_label' => 'name',
        
            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ]);
      // $builder
      // ->add('activite', CheckboxType::class, [
      //  'attr'=>[
      //      //boutoncheckbox
      //  'class' =>'form-control checkbox mt-4',],
      //      //nom de la permissions
      //  'label'=> 'Connection lecture seule',
      //  'label_attr' => [
      //          'class' => 'form-label mt-4'],    
      //  'constraints' => [
      //              new IsTrue([
      //                  'message' => 'permission activée'
      //             
      //  ])
      //  ]] 
      // );
             
        
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Utilisation de classe permissions ainsi que le bouleen pour checkbox
            'data_class' => Permissions::class
            
        ]);
    }
}
