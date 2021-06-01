<?php
namespace  App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdherentsController extends AbstractController
{
	/**
	* @Route("/adherents", name="adherents")
	*/
	public function adherents()
    {
        $adherents=array(array(
            'id' => '0',
            'nom'=> 'hatik'),
            array(
                'id' => '1',
                'nom' => 'emkal'),
                array(
                    'id' => '2',
                    'nom' => 'ligno'),
                    array(
                    'id' => '3',
                    'nom' => 'idem'),
            );
        return $this->render('tirage/adherents.html.twig', array('adherents'=>$adherents));
        }
    }