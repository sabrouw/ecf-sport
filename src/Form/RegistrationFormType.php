<?php
/*formulaire d'enregistrement de user*/
namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Partenaires;
use App\Entity\Permissions;
use App\Entity\Structures;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class,[
                'label'=>'Nom d\'utilisateur',
            ])
            ->add('email')
           
            ->add('password', PasswordType::class, [
                
                    'label'=>'Mot de passe',
                    'mapped' => false,
                    'attr' => [
                    'autocomplete' => 'new-password',
                    ],

                    'constraints' => [
                    new NotBlank([
                        'message' => 'Merci d\'entrer votre mot de passe',
                    ]),

                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),

                    ]])
                
            
            ->add('categorie', EntityType::class, [
                'class'=>Categorie::class,
                'placeholder' => false,
                'label'=>'Choix de catégorie',
                'choice_label'=> 'name'
                ])
            

            ->add('partenaires', TextType::class,[
                'label'=>'Nom du partenaire',
                'mapped'=>false,
                
                
                
            ])
            ->add('isActive', ChoiceType::class,[
                'label' => 'Activite',
                'choices'    =>[
                    'Actif' => true,
                    'Inactif'=> false,
                   
                ],
                'expanded'=> true
                
            ])
            
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'J\'accepte les termes d\'utilisation',
                'constraints' => [
                    
                ],
            ])
            ->add('submit', SubmitType::class);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,

        ]);
    }
}
