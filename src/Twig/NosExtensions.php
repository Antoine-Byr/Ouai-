<?php
namespace  App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class NosExtensions extends AbstractExtension
{

    public function getFilters()
    {
        return [
            
        ];
    }





    public function getFunctions()
    {
        return [
            new TwigFunction('calculcercle', [$this, 'calculcercle']),
            new TwigFunction('volumesphere', [$this, 'volumesphere']),
            new TwigFunction('mail', [$this, 'addresse']),
        ];
    }
    
    
    
    public function calculcercle($rayon){
        return(pi() * $rayon**2);
    }
    public function volumesphere($rayon){
        $resultat = ((4*pi()/3) * $rayon**3);
        return $resultat;
    }

    public function addresse ($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "L'adresse e-mail est valide";
          }else{
            echo "L'adresse e-mail n'est pas valide";
          }

    }





}