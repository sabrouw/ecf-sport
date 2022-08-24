<?php

namespace App\Controller;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
;



class PageController extends AbstractController
{/*page d'acceuil public*/
    #[Route('/', name: 'home')]
    public function home(): Response
    {    
        
        return $this->render('home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
/*page d'acceuil administrateur*/
    #[Route('/admin/home', name: 'admin_home')]
    public function adminHome(): Response
    {
        return $this->render('admin/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
/*on recupere les données du formulaire en post avec request des champs ci-dessous*/
    #[Route('/contact', name:'contact')]
    public function contact (Request $request, MailerInterface $mailerInterface):Response
    {
        $postRequest = $request->request;
        $firstName = $postRequest->get(key:'firstname');
        $lasttName = $postRequest->get(key:'laststname');
        $message = $postRequest->get(key:'message');
        
        /*config de l'envoie email admin*/
        $email = (new TemplatedEmail
        
        ());
        $email->from('sabrow@hotmail.fr')
        ->to ('sabrinadzzz@gmail.com')
        ->subject('test email')
        ->textTemplate('emails/contact.html.twig');

/*instance de la class générique mailer*/
        $mailerInterface->send($email);

        return $this -> render('contact.html.twig');
    }
}
