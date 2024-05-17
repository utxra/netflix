<?php

namespace App\Entity;

use App\Repository\ActoresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActoresRepository::class)]
class Actores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    /**
     * @var Collection<int, Peliculas>
     */
    #[ORM\ManyToMany(targetEntity: Peliculas::class, inversedBy: 'actores')]
    private Collection $pelicula;

    /**
     * @var Collection<int, Series>
     */
    #[ORM\ManyToMany(targetEntity: Series::class, inversedBy: 'actores')]
    private Collection $serie;

    public function __construct()
    {
        $this->pelicula = new ArrayCollection();
        $this->serie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Peliculas>
     */
    public function getPelicula(): Collection
    {
        return $this->pelicula;
    }

    public function addPelicula(Peliculas $pelicula): static
    {
        if (!$this->pelicula->contains($pelicula)) {
            $this->pelicula->add($pelicula);
        }

        return $this;
    }

    public function removePelicula(Peliculas $pelicula): static
    {
        $this->pelicula->removeElement($pelicula);

        return $this;
    }

    /**
     * @return Collection<int, Series>
     */
    public function getSerie(): Collection
    {
        return $this->serie;
    }

    public function addSerie(Series $serie): static
    {
        if (!$this->serie->contains($serie)) {
            $this->serie->add($serie);
        }

        return $this;
    }

    public function removeSerie(Series $serie): static
    {
        $this->serie->removeElement($serie);

        return $this;
    }
}
