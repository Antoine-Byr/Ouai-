<?php

namespace App\Controller;

use App\Entity\Plat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CarteController extends AbstractController
{
    /**
    * @Route("/carte_plat", name="carte_plat")
    */
    public function Plat()
    {
        $plat = $this -> getDoctrine()-> getManager() -> getRepository(Plat::class);
        $platAffiche = $plat -> findBy(
            array('categories' => 'plat')
        );
        foreach ($platAffiche as $key => $p){
            $platAffiche[$key]->image64 = base64_encode(stream_get_contents($p->getImage()));
        };

        
        return $this ->render ('tirage/tableau.html.twig',array(
            'plat' => $platAffiche
    ));
    }
    /**
    * @Route("/carte_entree", name="carte_entree")
    */
    public function Entree()
    {
        $plat = $this -> getDoctrine()-> getManager() -> getRepository(Plat::class);
        $platAffiche = $plat -> findBy(
            array('categories' => 'entrée')
        );
        foreach ($platAffiche as $key => $p){
            $platAffiche[$key]->image64 = base64_encode(stream_get_contents($p->getImage()));
        };

        
        return $this ->render ('tirage/tableau_entree.html.twig',array(
            'entree' => $platAffiche
    ));
    }
    /**
    * @Route("/carte_dessert", name="carte_dessert")
    */
    public function Dessert()
    {
        $plat = $this -> getDoctrine()-> getManager() -> getRepository(Plat::class);
        $platAffiche = $plat -> findBy(
            array('categories' => 'dessert')
        );
        foreach ($platAffiche as $key => $p){
            $platAffiche[$key]->image64 = base64_encode(stream_get_contents($p->getImage()));
        };

        
        return $this ->render ('tirage/tableau_dessert.html.twig',array(
            'dessert' => $platAffiche
    ));
    }


    /**
    * @Route("/carte_creation", name="carte_creation")
    */
    public function Creation()
    {
        $plat = $this -> getDoctrine()-> getManager() -> getRepository(Plat::class);
        $platAffiche = $plat -> findBy(
            array('categories' => 'creation')
        );

        
        return $this ->render ('tirage/tableau_creation.html.twig',array(
            'creation' => $platAffiche
    ));
    }



    /**
    * @Route("/choix", name="choix")
    */

    public function Choix()
    {
        $accueil = "Bienvenue sur la page ";
		return $this ->render ('tirage/choix.html.twig', ['accueil' => $accueil]);
    }
}