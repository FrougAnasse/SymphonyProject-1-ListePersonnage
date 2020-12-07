<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Weapon;

class ArmesController extends AbstractController
{
    #[Route('/armes', name: 'armes')]
    public function index(): Response
    {
        Weapon::creerWeapon();
        return $this->render('armes/armes.html.twig', [
            "armes" => Weapon::$armes,
        ]);
    }


     #[Route('/armes/{nom}', name: 'arme')]
     public function arme($nom): Response
     {
         Weapon::creerWeapon();
         $arme=Weapon::getWeaponParNom($nom);
         return $this->render('armes/arme.html.twig', [
             "arme" => $arme,
         ]);
     }
    
      
}
