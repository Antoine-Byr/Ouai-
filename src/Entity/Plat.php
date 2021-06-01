<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plat
 *
 * @ORM\Table(name="Plat")
 * @ORM\Entity(repositoryClass="App\Repository\PlatRepository")
 */
class Plat
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPlat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomplat", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nomplat = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prixHT", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prixht = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prixTTC", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prixttc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $image = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="categories", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $categories = 'NULL';

    public function getIdplat(): ?int
    {
        return $this->idplat;
    }

    public function getNomplat(): ?string
    {
        return $this->nomplat;
    }

    public function setNomplat(?string $nomplat): self
    {
        $this->nomplat = $nomplat;

        return $this;
    }

    public function getPrixht(): ?float
    {
        return $this->prixht;
    }

    public function setPrixht(?float $prixht): self
    {
        $this->prixht = $prixht;

        return $this;
    }

    public function getPrixttc(): ?float
    {
        return $this->prixttc;
    }

    public function setPrixttc(?float $prixttc): self
    {
        $this->prixttc = $prixttc;

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

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(?string $categories): self
    {
        $this->categories = $categories;

        return $this;
    }
    /*public function __toString(){
        // to show the name of the Category in the select
        return $this->nomplat;
        // to show the id of the Category in the select
        // return $this->id;
    }*/


}
