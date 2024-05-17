<?php

namespace App\Entity;

use App\Repository\PeliculasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\Column(length: 400)]
    private ?string $video = null;

    #[ORM\Column]
    private ?int $duracion = null;

    #[ORM\Column(length: 4)]
    private ?string $anio = null;

    #[ORM\Column(length: 255)]
    private ?string $director = null;

    #[ORM\Column(length: 400)]
    private ?string $imagen = null;

    /**
     * @var Collection<int, Actores>
     */
    #[ORM\ManyToMany(targetEntity: Actores::class, mappedBy: 'pelicula')]
    private Collection $actores;

    /**
     * @var Collection<int, Categorias>
     */
    #[ORM\ManyToMany(targetEntity: Categorias::class, mappedBy: 'pelicula')]
    private Collection $categorias;

    public function __construct()
    {
        $this->actores = new ArrayCollection();
        $this->categorias = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Actores>
     */
    public function getActores(): Collection
    {
        return $this->actores;
    }

    public function addActore(Actores $actore): static
    {
        if (!$this->actores->contains($actore)) {
            $this->actores->add($actore);
            $actore->addPelicula($this);
        }

        return $this;
    }

    public function removeActore(Actores $actore): static
    {
        if ($this->actores->removeElement($actore)) {
            $actore->removePelicula($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Categorias>
     */
    public function getCategorias(): Collection
    {
        return $this->categorias;
    }

    public function addCategoria(Categorias $categoria): static
    {
        if (!$this->categorias->contains($categoria)) {
            $this->categorias->add($categoria);
            $categoria->addPelicula($this);
        }

        return $this;
    }

    public function removeCategoria(Categorias $categoria): static
    {
        if ($this->categorias->removeElement($categoria)) {
            $categoria->removePelicula($this);
        }

        return $this;
    }
}
