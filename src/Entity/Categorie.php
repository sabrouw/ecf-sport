<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Partenaires::class)]
    private Collection $partenaires;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Structures::class)]
    private Collection $structures;

    public function __construct()
    {
        $this->partenaires = new ArrayCollection();
        $this->Structures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, partenaires>
     */
    public function getPartenaires(): Collection
    {
        return $this->partenaires;
    }

    public function addPartenaire(partenaires $partenaire): self
    {
        if (!$this->partenaires->contains($partenaire)) {
            $this->partenaires->add($partenaire);
            $partenaire->setCategorie($this);
        }

        return $this;
    }

    public function removePartenaire(partenaires $partenaire): self
    {
        if ($this->partenaires->removeElement($partenaire)) {
            // set the owning side to null (unless already changed)
            if ($partenaire->getCategorie() === $this) {
                $partenaire->setCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, structures>
     */
    public function getStructures(): Collection
    {
        return $this->structures;
    }

    public function addStructure(structures $structure): self
    {
        if (!$this->structures->contains($structure)) {
            $this->structures->add($structure);
            $structure->setCategorie($this);
        }

        return $this;
    }

    public function removeStructure(structures $structure): self
    {
        if ($this->structures->removeElement($structure)) {
            // set the owning side to null (unless already changed)
            if ($structure->getCategorie() === $this) {
                $structure->setCategorie(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }
}
