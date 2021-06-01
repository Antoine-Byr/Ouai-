<?php

namespace App\Controller;
use App\Entity\Client;
use App\Form\InscriptionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class InscriptionController extends AbstractController
{
    /**
	* @Route("/inscription", name="inscription")
	*/
	public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new Client();
        $form = $this->createForm(InscriptionFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setMotDePasse(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('mot_de_passe')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('accueil');
        }

        return $this->render('registration/Inscription.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
	/*
	public function list()
	{
		$inscription = 'inscr';
		return $this ->render ('registration/Inscription.html.twig', ['inscription' => $inscription]);

	}
*/	

}
?>