<?php

namespace App\Controller;

use App\Entity\Structures;
use App\Form\StructuresType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StructuresRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[IsGranted("ROLE_ADMIN")]
class AdminStructuresController extends AbstractController
{
    #[Route('/admin/structures', name: 'admin_structures')]
    public function structures(UserRepository $userRepository ,StructuresRepository $structuresRepository)
    {   $user = $userRepository->findAll();
        $structures = $structuresRepository->findAll();
        //envoie mon contenu de ma bdd dans la variable $strucures 
        //on affiche $partenaires dans fichier twig

        return $this->render("admin/structures.html.twig", [
            'structures' => $structures,
            'user'=>$user
        ]);
    }
    //partie controller recherche d'une structure par id
    #[Route("/admin/structure/{id}", name: "admin_structure")]
    public function structure($id, StructuresRepository $structuresRepository)
    { //recupere l'article par l'id dans l'url
        $structure = $structuresRepository->find($id);
        return $this->render('admin/structure.html.twig', [
            'structure' => $structure
        ]);
    }
    //permet de supprimer une structure dans la bdd
    #[Route('/admin/structures/{id}/delete', name: 'admin_structures_delete')]
    public function deleteStructure($id, StructuresRepository $structuresRepository, EntityManagerInterface $entityManagerInterface)
    {
        $structure = $structuresRepository->find($id);
        $entityManagerInterface->remove($structure);
        $entityManagerInterface->flush();
        $this->addFlash(type: 'success', message: 'La structure a bien été supprimé');
        return $this->redirectToRoute('admin_structures');
    }
    //formulaire de creation d'entité permet  de creer une entité
    #[Route('/admin/structures/insert', name: 'admin_insert_structure')]
    public function insertStructure(Request $request, EntityManagerInterface $entityManagerInterface, MailerInterface $mailer)
    {  
        $structure = new Structures();

        $structureForm = $this->createForm(StructuresType::class, $structure);
        $structureForm->handleRequest($request);
        //si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
        if ($structureForm->isSubmitted() && $structureForm->isValid()) {
            $entityManagerInterface->persist($structure);
            $entityManagerInterface->flush();
            $this->addFlash(type: 'success', message: 'La structure a bien été ajouté');
        //et envoie email au partenaire correspondant à la structure    
            //$emailToUser = (new TemplatedEmail())
            //->from('sabrow@hotmail.fr') 
            //->to($id)
            //->subject('Une structure a été ajoutée à vos structures')
            //->htmlTemplate('emails/ajoutStructure.html.twig')
            ////envoie de toutes les variables
            //->context([
            //    'partenaires'=>$partenaire,
            //    'structures'=>$structure,
            //     
            //    
//
//
//
        //]);//
//
    /*instan//ce de la class générique mailer*/
            // $mailer->send($emailToUser)
            //       
    //
;
        }
        
        return $this->render('admin/structure_insert.html.twig', [
            'structureForm' => $structureForm->createView()
        ]);
    }
    #[Route("/admin/structure/{id}/update", name: "admin_structure_update")]
    public function updateStructure($id, StructuresRepository $structuresRepository, EntityManagerInterface $entityManagerInterface, Request $request)
    {
        $structure = $structuresRepository->find($id);
        $structureForm = $this->createForm(StructuresType::class, $structure);
        $structureForm->handleRequest($request);
        //si mon formulaire est soumis (post)et valide alors j'envoie les données en bdd (flush)
        if ($structureForm->isSubmitted() && $structureForm->isValid()) {
            $entityManagerInterface->persist($structure);
            $entityManagerInterface->flush();
            $this->addFlash(type: 'success', message: 'La structure a bien été mis à jour');
        }
        
        return $this->render('admin/structure_update.html.twig', [
            'structureForm' => $structureForm->createView()
        ]);
    }
}
