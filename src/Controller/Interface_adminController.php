<?php
declare(strict_types=1);

namespace App\Controller\Interface_AdminController;

use App\Repository\PartenairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class Interface_AdminController extends AbstractController
{
#[Route("/admin/partenaires", name:"admin_partenaires")]
 //creer la page adimnistration des partenaires 
 public function adminPartenaires(PartenairesRepository $partenairesRepository){

   $partenaires = $partenairesRepository->findAll();
  return $this->render("interface_admin.html.twig", ['partenaires'=> $partenaires]);


 }

}
