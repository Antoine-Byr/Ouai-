<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="Staff")
 * @ORM\Entity(repositoryClass="App\Repository\StaffRepository")
 */
class Staff
{
    /**
     * @var int
     *
     * @ORM\Column(name="idStaff", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstaff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $statut = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $prenom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudo", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $pseudo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="motdepasse", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $motdepasse = 'NULL';

    public function getIdstaff(): ?int
    {
        return $this->idstaff;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(?string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }


}
