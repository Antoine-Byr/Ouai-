<?php
namespace  App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
	/**
	* @Route("/contact", name="contact_list")
	*/
	public function list()
	{
		$contact = "06";
		return $this ->render ('tirage/contact.html.twig', ['contact' => $contact]);
	}
}
