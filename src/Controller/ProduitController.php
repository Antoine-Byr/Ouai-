<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProduitController extends AbstractController
{
    /**
    * @Route("/produit", name="produit")
    */
    public function form()
    {
        return $this->render('macro/produit.html.twig');
    }
}