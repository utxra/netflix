<?php

namespace App\Entity;

use App\Repository\PeliculasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PeliculasRepository::class)]
class Peliculas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sinopsis = null;

    #[ORM\Column(length: 255)]
    private ?string $video = null;

    #[ORM\Column]
    private ?int $duracion = null;

    #[ORM\Column(length: 4)]
    private ?string $anio = null;

    #[ORM\Column(length: 255)]
    private ?string $director = null;

    #[ORM\Column(length: 255)]
    private ?string $imagen = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

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

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): static
    {
        $this->video = $video;

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

    public function getAnio(): ?string
    {
        return $this->anio;
    }

    public function setAnio(string $anio): static
    {
        $this->anio = $anio;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): static
    {
        $this->director = $director;

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
}
