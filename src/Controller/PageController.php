<?php

namespace App\Controller;

use App\Repository\PartenairesRepository;
use App\Repository\StructuresRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;



class PageController extends AbstractController
{
    /*page d'acceuil public*/
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'PageController',
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
/*page d'acceuil admin*/
    #[Route('/admin/home', name: 'admin_home')]
    public function adminHome(): Response
    {
        return $this->render('admin/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
/*page d'acceuil si connecté*/
    #[Route('/connecte', name: 'home_connecte')]
    public function homeConnecte(UserRepository $userRepository, PartenairesRepository $partenairesRepository, StructuresRepository $structuresRepository): Response
    {   $user = $userRepository->findAll();
        $partenaire = $partenairesRepository->findAll();
        $structure = $structuresRepository->findAll();

        return $this->render('connecte.html.twig', [
            'user' => $user,
            'partenaire'=> $partenaire,
            'structure' => $structure,
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
