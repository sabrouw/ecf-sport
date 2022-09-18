<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
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
