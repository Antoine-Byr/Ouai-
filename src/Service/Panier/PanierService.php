<?php

namespace App\Service\Panier;

use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService {

    protected $session;
    protected $platRepository;

    public function __construct(SessionInterface $session, PlatRepository $platRepository)
    {
        $this->session = $session;
        $this->platRepository = $platRepository;
    }

    public function avoirPanierComplet(){
        $panier = $this->session->get("panier", []);
        $panierFullData = [];

        foreach($panier as $id => $quantity){
            $panierFullData[] = [
                'produit' => $this->platRepository->find($id),
                'quantity' => $quantity
            ];
        }

        return $panierFullData;
    }


}


?>