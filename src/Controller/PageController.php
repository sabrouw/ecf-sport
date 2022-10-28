<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PartenairesRepository;
use App\Repository\PermissionsRepository;
use App\Repository\StructuresRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;




class PageController extends AbstractController
{
    /*page d'acceuil public*/
    #[Route('/', name: 'home')]
    public function home(CategorieRepository $categorieRepository, PartenairesRepository $partenairesRepository, StructuresRepository $structuresRepository)
    {   $categorie = $categorieRepository->findAll();
        $partenaire = $partenairesRepository->findAll();
        $structure = $structuresRepository->findAll();
        return $this->render('home.html.twig', [
            'partenaires'=> $partenaire,
            'structures' => $structure,
            'categorie'=>$categorie
        ]);
    }
/*page d'acceuil partenaires*/
    #[Route('/partenaire/home', name: 'partenaire_home')]
    public function partenairesHome(): Response
    {
        return $this->render('partenaires/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /*page d'acceuil structures*/
    #[Route('/structure/home', name: 'structure_home')]
    public function structuresHome(): Response
    {
        return $this->render('structures/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
/*page d'acceuil admin*/
#[IsGranted("ROLE_ADMIN")]
    #[Route('/admin/home', name: 'admin_home')]
    public function adminHome(): Response
    {
        return $this->render('admin/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
/*page d'acceuil si connecté*/
    #[IsGranted("ROLE_USER")]
    #[Route('/connecte', name: 'home_connecte')]
    public function homeConnecte(PermissionsRepository $permissionsRepository, UserRepository $userRepository, PartenairesRepository $partenairesRepository, StructuresRepository $structuresRepository)
    {   $user = $userRepository->findAll();
        $partenaire = $partenairesRepository->findAll();
        $structure = $structuresRepository->findAll();
        $permissions = $permissionsRepository->findAll();
       /* $form = $this->createFormBuilder()
        
        ->add('statut', CheckboxType::class,[
            'label' => 'actif',
            'required=> false,
            
            
            'class' => Partenaire::class,
                 ]) 
            
        
        
        ->add('valider', SubmitType::class)
        
        ->getForm()
    ;
if ($form->isSubmitted() && $form->isValid()) {
    // encoder mot de passe entré

    $permissions = $form->getData();
    
}*/
        return $this->render('connecte.html.twig', [
            'user' => $user,
            'partenaire'=> $partenaire,
            'structure' => $structure,
            'permissions'=> $permissions,
            /*'form' => $form*/
        ]);

    }

/*formulaire de contact*/
/*on recupere les données du formulaire en post avec request des champs ci-dessous*/
    #[Route('/contact', name:'contact')]
    public function contact(Request $request, MailerInterface $mailerInterface): Response
    {
        $postRequest = $request->request;
        $emailUser = $postRequest->get(key:'emailUser');
        $firstName = $postRequest->get(key:'firstname');
        $lastName = $postRequest->get(key:'lastname');
        $message = $postRequest->get(key:'message');

        /*config de l'envoie email admin*/
        $templatedEmail = new TemplatedEmail();
        $templatedEmail->from(adresses:'sabrinadzzz@gmail.com')
        ->to('sabrow@hotmail.fr')
        ->subject(subject: $emailUser. 'vous a envoyé un message')
        ->textTemplate('emails/contact.html.twig')
        ->context ([
        'firstName'=> $firstName, 
        'lastName'=>$lastName,
        'message'=>$message, 
        'emailUser' => $emailUser]);

        /*instance de la class générique mailer*/
        $mailerInterface->send($templatedEmail);
        
        
        return $this -> render('contact.html.twig');
    }
  
}
