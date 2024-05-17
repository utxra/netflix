<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sinopsis = null;

    #[ORM\Column]
    private ?int $num_temporadas = null;

    #[ORM\Column(length: 4)]
    private ?string $anio_salida = null;

    #[ORM\Column(length: 4)]
    private ?string $anio_fin = null;

    #[ORM\Column(length: 255)]
    private ?string $director = null;

    #[ORM\Column(length: 400)]
    private ?string $imagen = null;

    /**
     * @var Collection<int, Temporadas>
     */
    #[ORM\OneToMany(targetEntity: Temporadas::class, mappedBy: 'serie')]
    private Collection $temporadas;

    /**
     * @var Collection<int, Actores>
     */
    #[ORM\ManyToMany(targetEntity: Actores::class, mappedBy: 'serie')]
    private Collection $actores;

    /**
     * @var Collection<int, Categorias>
     */
    #[ORM\ManyToMany(targetEntity: Categorias::class, mappedBy: 'serie')]
    private Collection $categorias;

    public function __construct()
    {
        $this->temporadas = new ArrayCollection();
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

    public function getNumTemporadas(): ?int
    {
        return $this->num_temporadas;
    }

    public function setNumTemporadas(int $num_temporadas): static
    {
        $this->num_temporadas = $num_temporadas;

        return $this;
    }

    public function getAnioSalida(): ?string
    {
        return $this->anio_salida;
    }

    public function setAnioSalida(string $anio_salida): static
    {
        $this->anio_salida = $anio_salida;

        return $this;
    }

    public function getAnioFin(): ?string
    {
        return $this->anio_fin;
    }

    public function setAnioFin(string $anio_fin): static
    {
        $this->anio_fin = $anio_fin;

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
     * @return Collection<int, Temporadas>
     */
    public function getTemporadas(): Collection
    {
        return $this->temporadas;
    }

    public function addTemporada(Temporadas $temporada): static
    {
        if (!$this->temporadas->contains($temporada)) {
            $this->temporadas->add($temporada);
            $temporada->setSerie($this);
        }

        return $this;
    }

    public function removeTemporada(Temporadas $temporada): static
    {
        if ($this->temporadas->removeElement($temporada)) {
            // set the owning side to null (unless already changed)
            if ($temporada->getSerie() === $this) {
                $temporada->setSerie(null);
            }
        }

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
            $actore->addSerie($this);
        }

        return $this;
    }

    public function removeActore(Actores $actore): static
    {
        if ($this->actores->removeElement($actore)) {
            $actore->removeSerie($this);
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
            $categoria->addSerie($this);
        }

        return $this;
    }

    public function removeCategoria(Categorias $categoria): static
    {
        if ($this->categorias->removeElement($categoria)) {
            $categoria->removeSerie($this);
        }

        return $this;
    }
}
