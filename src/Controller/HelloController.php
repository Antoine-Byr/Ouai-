<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    /**
    * @Route("/hello", name="hello")
    */
    public function form()
    {
        return $this->render('tirage/hello.html.twig');
    }
}