<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplement
 *
 * @ORM\Table(name="supplement")
 * @ORM\Entity
 */
class Supplement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    public function getIdSupp(): ?int
    {
        return $this->idSupp;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): void
    {
        $this->prix = $prix;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
}
