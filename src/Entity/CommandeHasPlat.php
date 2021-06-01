<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeHasPlat
 *
 * @ORM\Table(name="Commande_has_Plat", indexes={@ORM\Index(name="fk_Commande_has_Plat_Plat1_idx", columns={"idPlat"}), @ORM\Index(name="fk_Commande_has_Plat_Commande1_idx", columns={"idCommande"}), @ORM\Index(name="fk_Commande_has_Plat_Composition1_idx", columns={"idComposition"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommandeHasRepository")
 */
class CommandeHasPlat
{
    /**
     * @var \Commande
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommande", referencedColumnName="idCommande")
     * })
     */
    private $idcommande;

    /**
     * @var \Composition
     *
     * @ORM\ManyToOne(targetEntity="Composition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idComposition", referencedColumnName="idComposition")
     * })
     */
    private $idcomposition;

    /**
     * @var \Plat
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Plat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPlat", referencedColumnName="idPlat")
     * })
     */
    private $idplat;

    public function getIdcommande(): ?Commande
    {
        return $this->idcommande;
    }

    public function setIdcommande(?Commande $idcommande): self
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    public function getIdcomposition(): ?Composition
    {
        return $this->idcomposition;
    }

    public function setIdcomposition(?Composition $idcomposition): self
    {
        $this->idcomposition = $idcomposition;

        return $this;
    }

    public function getIdplat(): ?Plat
    {
        return $this->idplat;
    }

    public function setIdplat(?Plat $idplat): self
    {
        $this->idplat = $idplat;

        return $this;
    }


}
