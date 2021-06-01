<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="Ingredient")
 * @ORM\Entity(repositoryClass="App\Repository\IngredientRepository")
 */
class Ingredient
{
    /**
     * @var int
     *
     * @ORM\Column(name="idIngredient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idingredient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomingredient", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nomingredient = 'NULL';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Composition", mappedBy="idingredient")
     */
    private $idcomposition;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $image;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcomposition = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdingredient(): ?int
    {
        return $this->idingredient;
    }

    public function getNomingredient(): ?string
    {
        return $this->nomingredient;
    }

    public function setNomingredient(?string $nomingredient): self
    {
        $this->nomingredient = $nomingredient;

        return $this;
    }

    /**
     * @return Collection|Composition[]
     */
    public function getIdcomposition(): Collection
    {
        return $this->idcomposition;
    }

    public function addIdcomposition(Composition $idcomposition): self
    {
        if (!$this->idcomposition->contains($idcomposition)) {
            $this->idcomposition[] = $idcomposition;
            $idcomposition->addIdingredient($this);
        }

        return $this;
    }

    public function removeIdcomposition(Composition $idcomposition): self
    {
        if ($this->idcomposition->removeElement($idcomposition)) {
            $idcomposition->removeIdingredient($this);
        }

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

}
