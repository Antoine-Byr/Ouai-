<?php
namespace  App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LivreController extends AbstractController
{
	/**
	* @Route("/livre", name="livre")
	*/
	public function list()
	{
		$livre = "One Piece";
		return $this ->render ('tirage/livre.html.twig', ['livre' => $livre]);
	}
}
