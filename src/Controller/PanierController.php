<?php
namespace  App\Controller;
use App\Entity\Plat;
use App\Entity\Ingredient;
use App\Entity\Commande;
use App\Entity\Client;
use App\Repository\PlatRepository;
use App\Repository\IngredientRepository;
use App\Service\Panier\PanierService;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;

class PanierController extends AbstractController
{
	/**
	* @Route("/panier", name="panier_index")
	*/
    public function index(SessionInterface $session, PlatRepository $productRepository, IngredientRepository $ingredientRepository)
    {
      $panier = $session->get('panier', []);

      $panierWithData = [];
      
        foreach ($panier as $id => $quantity){
          $panierWithData[] = [
            'product' => $productRepository->find($id),
            'ingredient' => $ingredientRepository->find($id),
            'quantity' => $quantity
          ];
        }

        $total = 0;
        foreach ($panierWithData as $item){
          $totalItem = $item['product']->getPrixttc() * $item['quantity'];
          $total += $totalItem;
        }

      //dd($panierWithData);
        return $this->render('tirage/panier.html.twig', [
          'items'=> $panierWithData,
          'total'=> $total
        ]);
    }


  /**
	* @Route("/panier/add/{id}", name="panier_add")
	*/
    public function add($id, SessionInterface $session)
    {
      $panier = $session->get('panier', []);
      //si panier pas vide, rajouter une valeur
      if(!empty($panier[$id]))
      {
        $panier[$id]++;
      }
      //si panier vide met la valeur 1
      else
      {
        $panier[$id] = 1;
      }
      
      $session->set('panier', $panier);
      //dd($session->get('panier'));
      return $this->redirectToRoute("carte_plat");

    }


  /**
	* @Route("/panier/add/create/{id}", name="panier_add_create")
	*/
  public function add_create($id, SessionInterface $session)
  {
    $panier = $session->get('panier', []);
    //si panier pas vide, rajouter une valeur
    if(!empty($panier[$id]))
    {
      $panier[$id]++;
    }
    //si panier vide met la valeur 1
    else
    {
      $panier[$id] = 1;
    }
    
    $session->set('panier', $panier);
    //dd($session->get('panier'));
    return $this->redirectToRoute("create");

  }


  /**
	* @Route("/panier/remove/{id}", name="panier_remove")
	*/
  public function remove($id, SessionInterface $session)
  {
    $panier = $session->get('panier', []);
    if(!empty($panier[$id]))
    {
      unset($panier[$id]);
    }
    $session->set('panier', $panier);

    return $this->redirectToRoute("panier_index");

  }
/**
	* @Route("/panier/validate", name="panier_validate")
	*/
  public function validatePanier(PanierService $panierService, UserInterface $user){
    $fkClient = $user->getIdclient();
    $nouvelleCommande = new Commande();
    $nouvelleCommande->setRendu("0");
    $nouvelleCommande->setDate(date('Y-m-d'));
    $nouvelleCommande->setHeure(date("H:i"));
    $nouvelleCommande->setIdclient($fkClient);

    $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($nouvelleCommande);
        $entityManager->flush();

  }


}