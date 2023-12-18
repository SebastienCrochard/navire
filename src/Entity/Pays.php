<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table (name: 'pays')]
#[Assert\Unique(fiefds: ['indicatif'])]
#[ORM\Entity(repositoryClass: PaysRepository::class)]
#[ORM\Index(name:'ind_indicatif', columns: ['indicatif'])]
class Pays
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:'id')]
    private ?int $id = null;

    #[ORM\Column(name:'nom', length: 70)]
    private ?string $nom = null;

    #[ORM\Column(name:'indicatif', length: 3)]
    #[ORM\Regex(pattern:"/[A-Z]{3}/", message:"L'indicatif Pays a strictement 3 caractères")]
    private ?string $indicatif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIndicatif(): ?string
    {
        return $this->indicatif;
    }

    public function setIndicatif(string $indicatif): static
    {
        $this->indicatif = $indicatif;

        return $this;
    }
}
