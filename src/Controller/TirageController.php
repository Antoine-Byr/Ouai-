<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class TirageController extends AbstractController
	{
	/**
	* @Route("/tirage/nombre", name="tirage")
	*/
	public function number()
	{
		$nombre = random_int(0, 100);
		return $this ->render('tirage/nombre.html.twig',['nombre' =>  $nombre]);
		
	}
}