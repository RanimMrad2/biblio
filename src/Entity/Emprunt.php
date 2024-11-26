<?php

namespace App\Entity;

use App\Repository\EmpruntRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpruntRepository::class)]
class Emprunt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $livre_id = null;

    #[ORM\Column]
    private ?int $utilisateur_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_emprunt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_retour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getLivreId(): ?int
    {
        return $this->livre_id;
    }

    public function setLivreId(int $livre_id): static
    {
        $this->livre_id = $livre_id;

        return $this;
    }

    public function getUtilisateurId(): ?int
    {
        return $this->utilisateur_id;
    }

    public function setUtilisateurId(int $utilisateur_id): static
    {
        $this->utilisateur_id = $utilisateur_id;

        return $this;
    }

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->date_emprunt;
    }

    public function setDateEmprunt(\DateTimeInterface $date_emprunt): static
    {
        $this->date_emprunt = $date_emprunt;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->date_retour;
    }

    public function setDateRetour(\DateTimeInterface $date_retour): static
    {
        $this->date_retour = $date_retour;

        return $this;
    }
}
