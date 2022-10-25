<?php

namespace App\Controller;

use ApiPlatform\Core\Api\UrlGeneratorInterface;
use App\Form\ResetPasswordFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface as GeneratorUrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    
    public function index(AuthenticationUtils $authenticationUtils): Response
    {   
        $error = $authenticationUtils->getLastAuthenticationError();   
        $lastUsername = $authenticationUtils->getLastUsername();
        
        $this -> addFlash(type:'success', message:'Vous etes connecté');
        return $this->render('login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
   

    #[Route('/logout', name:'logout')]
    public function logout():Response
    {
        $this -> addFlash(type:'success', message:'Vous etes déconnecté');
        return $this -> redirectToRoute('logout');
    }

      
    #[Route('/oubli_pass', name:'passe_oublie')]
              public function oubliMotDepasse(
                Request $request, 
                UserRepository $userRepository, 
                TokenGeneratorInterface $tokenGeneratorInterface,
                EntityManagerInterface $entityManagerInterface,
                //SendEmailMessage $mail
                ):Response{
                $form = $this->createForm(ResetPasswordFormType::class);
                $form->handleRequest($request);
                //verif si email est correct et correspond a un user
                if ($form->isSubmitted() && $form->isValid()){
                  $user =  $userRepository->findOneByEmail($form->get('email')->getData());
                  if($user){
                    $token = $tokenGeneratorInterface->generateToken();
                    $user->setResetToken($token);
                    $entityManagerInterface->persist($user);
                    $entityManagerInterface->flush();
//genere url token
                    $url = $this->generateUrl('reset_pass',['token'=>$token], GeneratorUrlGeneratorInterface::ABSOLUTE_URL);
                    $context = compact('url', 'user');

                   // envoie email
                   //$mail->sendEmailMessage(
                    //('no_reply@reiniit.fr')
                    //($user->getEmail())
                    //('Reinitialisation de mot de passe')
                    //('email/password_reset.html.twig')
                   //);
                }
                  $this->addFlash('danger', 'un probleme est survenu');
                  return $this->redirectToRoute('login');
                }


                
            return $this->render('reset_password.html.twig', [
                'resetPassWordForm'=>$form->createView()
            ]);
        }

        /*#[Route('/oubli_pass/{token}', name:'reset_pass')]
        public function pass():Response
        {

        }*/

        

        
}
