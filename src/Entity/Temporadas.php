<?php

namespace App\Entity;

use App\Repository\TemporadasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private ?int $num_episodios = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sinopsis = null;

    #[ORM\Column]
    private ?int $orden = null;

    #[ORM\ManyToOne(inversedBy: 'temporadas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Series $serie = null;

    /**
     * @var Collection<int, Episodios>
     */
    #[ORM\OneToMany(targetEntity: Episodios::class, mappedBy: 'temporada')]
    private Collection $episodios;

    public function __construct()
    {
        $this->episodios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSerie(): ?Series
    {
        return $this->serie;
    }

    public function setSerie(?Series $serie): static
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * @return Collection<int, Episodios>
     */
    public function getEpisodios(): Collection
    {
        return $this->episodios;
    }

    public function addEpisodio(Episodios $episodio): static
    {
        if (!$this->episodios->contains($episodio)) {
            $this->episodios->add($episodio);
            $episodio->setTemporada($this);
        }

        return $this;
    }

    public function removeEpisodio(Episodios $episodio): static
    {
        if ($this->episodios->removeElement($episodio)) {
            // set the owning side to null (unless already changed)
            if ($episodio->getTemporada() === $this) {
                $episodio->setTemporada(null);
            }
        }

        return $this;
    }
}
