<?php
namespace  App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController
{
	/**
	* @Route("/accueil", name="accueil")
	*/
	public function list()
	{
		/*if($this->getUser())
			echo "Connecté avec : ".$this->getUser()->getUsername();
		else
			echo "non connecté";*/
		$accueil = "Bienvenue sur la page ";
		return $this ->render ('tirage/accueil.html.twig', ['accueil' => $accueil]);
	}

	/**
	* @IsGranted("ROLE_USER")
	* @Route("/accueilco", name="accueilco")
	*/
	public function accueilco()
	{		
		$isConnect = true;
		$accueil = "Bienvenue sur la page Securisé";
		return $this ->render ('tirage/accueil.html.twig', ['accueil' => $accueil, 'connect' => $isConnect]);
	}
}
