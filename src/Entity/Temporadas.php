<?php

namespace App\Entity;

use App\Repository\TemporadasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TemporadasRepository::class)]
class Temporadas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idserie = null;

    #[ORM\Column]
    private ?int $num_episodios = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sinopsis = null;

    #[ORM\Column]
    private ?int $orden = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdserie(): ?int
    {
        return $this->idserie;
    }

    public function setIdserie(int $idserie): static
    {
        $this->idserie = $idserie;

        return $this;
    }

    public function getNumEpisodios(): ?int
    {
        return $this->num_episodios;
    }

    public function setNumEpisodios(int $num_episodios): static
    {
        $this->num_episodios = $num_episodios;

        return $this;
    }

    public function getSinopsis(): ?string
    {
        return $this->sinopsis;
    }

    public function setSinopsis(string $sinopsis): static
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    public function getOrden(): ?int
    {
        return $this->orden;
    }

    public function setOrden(int $orden): static
    {
        $this->orden = $orden;

        return $this;
    }
}
