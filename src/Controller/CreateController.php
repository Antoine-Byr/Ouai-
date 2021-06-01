<?php

namespace App\Controller;

use App\Entity\Ingredient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CreateController extends AbstractController
{
    /**
    * @Route("/create", name="create")
    */
    public function Create()
    {
        $ingredient = $this -> getDoctrine()-> getManager() -> getRepository(Ingredient::class);
        $ingredientAffiche = $ingredient -> findAll();
        foreach ($ingredientAffiche as $key => $i){
            $ingredientAffiche[$key]->image64 = base64_encode(stream_get_contents($i->getImage()));
        };

        
        return $this ->render ('tirage/choix_ingredient.html.twig',array(
            'ingredient' => $ingredientAffiche
    ));
    }




    /**
    * @Route("/create_maki", name="create_maki")
    */
    public function Maki()
    {
        $choix = "maki";
        $ingredient = $this -> getDoctrine()-> getManager() -> getRepository(Ingredient::class);
        $ingredientAffiche = $ingredient -> findAll();
        foreach ($ingredientAffiche as $key => $i){
            $ingredientAffiche[$key]->image64 = base64_encode(stream_get_contents($i->getImage()));
        };

        
        return $this ->render ('tirage/choix_ingredient.html.twig',array(
            'ingredient' => $ingredientAffiche,
            'choix' => $choix
    ));

    }

    /**
    * @Route("/create_california", name="create_california")
    */
    public function California()
    {
        $choix = "california rolls";
        $ingredient = $this -> getDoctrine()-> getManager() -> getRepository(Ingredient::class);
        $ingredientAffiche = $ingredient -> findAll();
        foreach ($ingredientAffiche as $key => $i){
            $ingredientAffiche[$key]->image64 = base64_encode(stream_get_contents($i->getImage()));
        };

        
        return $this ->render ('tirage/choix_ingredient.html.twig',array(
            'ingredient' => $ingredientAffiche,
            'choix' => $choix
    ));
        
    }

    /**
    * @Route("/create_spring", name="create_spring")
    */
    public function Spring()
    {
        $choix = "spring rolls";
        $ingredient = $this -> getDoctrine()-> getManager() -> getRepository(Ingredient::class);
        $ingredientAffiche = $ingredient -> findAll();
        foreach ($ingredientAffiche as $key => $i){
            $ingredientAffiche[$key]->image64 = base64_encode(stream_get_contents($i->getImage()));
        };

        
        return $this ->render ('tirage/choix_ingredient.html.twig',array(
            'ingredient' => $ingredientAffiche,
            'choix' => $choix
    ));
        
    }


}