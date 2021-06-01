<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Composition
 *
 * @ORM\Table(name="Composition", indexes={@ORM\Index(name="fk_Composition_Plat1_idx", columns={"idPlat"})})
 * @ORM\Entity(repositoryClass="App\Repository\CompositiontRepository")
 */
class Composition
{
    /**
     * @var int
     *
     * @ORM\Column(name="idComposition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomposition;

    /**
     * @var \Plat
     *
     * @ORM\ManyToOne(targetEntity="Plat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPlat", referencedColumnName="idPlat")
     * })
     */
    private $idplat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ingredient", inversedBy="idcomposition")
     * @ORM\JoinTable(name="composition_has_ingredient",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idComposition", referencedColumnName="idComposition")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idIngredient", referencedColumnName="idIngredient")
     *   }
     * )
     */
    private $idingredient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idingredient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdcomposition(): ?int
    {
        return $this->idcomposition;
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

    /**
     * @return Collection|Ingredient[]
     */
    public function getIdingredient(): Collection
    {
        return $this->idingredient;
    }

    public function addIdingredient(Ingredient $idingredient): self
    {
        if (!$this->idingredient->contains($idingredient)) {
            $this->idingredient[] = $idingredient;
        }

        return $this;
    }

    public function removeIdingredient(Ingredient $idingredient): self
    {
        $this->idingredient->removeElement($idingredient);

        return $this;
    }

}
