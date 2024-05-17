<?php

namespace App\Entity;

use App\Repository\EpisodiosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EpisodiosRepository::class)]
class Episodios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sinopsis = null;

    #[ORM\Column]
    private ?int $duracion = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 400)]
    private ?string $video = null;

    #[ORM\Column(length: 400)]
    private ?string $imagen = null;

    #[ORM\Column]
    private ?int $orden = null;

    #[ORM\ManyToOne(inversedBy: 'episodios')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Temporadas $temporada = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDuracion(): ?int
    {
        return $this->duracion;
    }

    public function setDuracion(int $duracion): static
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): static
    {
        $this->video = $video;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): static
    {
        $this->imagen = $imagen;

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

    public function getTemporada(): ?Temporadas
    {
        return $this->temporada;
    }

    public function setTemporada(?Temporadas $temporada): static
    {
        $this->temporada = $temporada;

        return $this;
    }
}
