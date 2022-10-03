<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
/*formulaire d'enregistrement ou de création d'user*/
    
    #[Route('/admin/register/{id?0}', name: 'admin_register')]
    public function register($id,User $user =null,Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {   $user = $userRepository->find($id);
        
        
        if (!$user){
        $user = new User();
    }   
      
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            // encoder mot de passe entré
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

// generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('sabrinadzzz@gmail.com', 'sabrina'))
                    ->to($user->getEmail())
                    ->subject('Merci de confirmer votre adresse email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
                   
            );
// do anything else you need here, like send an email

            return $this->redirectToRoute('home');
            $this->addFlash('success', 'L\'utilisateur a bien été ajouté un email de confirmation lui a été envoyé pour valider son email.');
        }

        return $this->render('admin/registration.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
/*vérification d'email*/
    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

// validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre adresse email a été vérifier.');

        return $this->redirectToRoute('home');
    }
}
