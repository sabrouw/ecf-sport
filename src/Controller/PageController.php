<?php

namespace App\Controller;

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
    public function homeConnecte(UserRepository $userRepository): Response
    {$user = $userRepository->userFindPartenaire();
        return $this->render('connecte.html.twig', [
            'user' => $user,
        ]);

    }
/*formulaire de contact*/
/*on recupere les données du formulaire en post avec request des champs ci-dessous*/
    #[Route('/contact', name:'contact')]
    public function contact(Request $request, MailerInterface $mailerInterface): Response
    {
        $postRequest = $request->request;
        $firstName = $postRequest->get(key:'firstname');
        $lasttName = $postRequest->get(key:'laststname');
        $message = $postRequest->get(key:'message');

        /*config de l'envoie email admin*/
        $email = (new TemplatedEmail());
        $email->from('sabrow@hotmail.fr')
        ->to('sabrinadzzz@gmail.com')
        ->subject('test email')
        ->textTemplate('emails/contact.html.twig');

        /*instance de la class générique mailer*/
        $mailerInterface->send($email);

        return $this -> render('contact.html.twig');
    }
  
}
