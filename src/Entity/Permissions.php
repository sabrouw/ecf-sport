<?php

namespace App\Entity;

use App\Repository\PermissionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Form\PermissionsType;





#[ApiResource (collectionOperations: ['get'], itemOperations: ['get'])]
#[ORM\Entity(repositoryClass: PermissionsRepository::class)]
class Permissions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $activite = null;

    #[ORM\OneToMany(mappedBy: 'permission1', targetEntity: Structures::class)]
    private Collection $structures;

    #[ORM\OneToMany(mappedBy: 'permission1', targetEntity: Partenaires::class)]
    private Collection $partenaires;

    #[ORM\OneToMany(mappedBy: 'permission2', targetEntity: Partenaires::class)]
    private Collection $partenaires2;

    #[ORM\OneToMany(mappedBy: 'permission3', targetEntity: Partenaires::class)]
    private Collection $partenaires3;

    #[ORM\OneToMany(mappedBy: 'permission4', targetEntity: Partenaires::class)]
    private Collection $partenaires4;

    #[ORM\OneToMany(mappedBy: 'permission5', targetEntity: Partenaires::class)]
    private Collection $partenaires5;

    #[ORM\ManyToOne(inversedBy: 'permissions')]
    private ?Structures $structure = null;

    public function __construct()
    {
        $this->structures = new ArrayCollection();
        $this->partenaires = new ArrayCollection();
        $this->partenaires2 = new ArrayCollection();
        $this->partenaires3 = new ArrayCollection();
        $this->partenaires4 = new ArrayCollection();
        $this->partenaires5 = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function isActivite(): ?bool
    {
        return $this->activite;
    }

    public function setActivite(bool $activite): self
    {
        $this->activite = $activite;

        return $this;
    
    }

    /**
     * @return Collection<int, Structures>
     */
    public function getStructures(): Collection
    {
        return $this->structures;
    }

    public function addStructure(Structures $structure): self
    {
        if (!$this->structures->contains($structure)) {
            $this->structures->add($structure);
            $structure->setPermission1($this);
        }

        return $this;

    }

    public function removeStructure(Structures $structure): self
    {
        if ($this->structures->removeElement($structure)) {
            // set the owning side to null (unless already changed)
            if ($structure->getPermission1() === $this) {
                $structure->setPermission1(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Partenaires>
     */
    public function getPartenaires(): Collection
    {
        return $this->partenaires;
    }

    public function addPartenaire(Partenaires $partenaire): self
    {
        if (!$this->partenaires->contains($partenaire)) {
            $this->partenaires->add($partenaire);
            $partenaire->setPermission1($this);
        }

        return $this;
    }

    public function removePartenaire(Partenaires $partenaire): self
    {
        if ($this->partenaires->removeElement($partenaire)) {
            // set the owning side to null (unless already changed)
            if ($partenaire->getPermission1() === $this) {
                $partenaire->setPermission1(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Partenaires>
     */
    public function getPartenaires2(): Collection
    {
        return $this->partenaires2;
    }

    public function addPartenaires2(Partenaires $partenaires2): self
    {
        if (!$this->partenaires2->contains($partenaires2)) {
            $this->partenaires2->add($partenaires2);
            $partenaires2->setPermission2($this);
        }

        return $this;
    }

    public function removePartenaires2(Partenaires $partenaires2): self
    {
        if ($this->partenaires2->removeElement($partenaires2)) {
            // set the owning side to null (unless already changed)
            if ($partenaires2->getPermission2() === $this) {
                $partenaires2->setPermission2(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Partenaires>
     */
    public function getPartenaires3(): Collection
    {
        return $this->partenaires3;
    }

    public function addPartenaires3(Partenaires $partenaires3): self
    {
        if (!$this->partenaires3->contains($partenaires3)) {
            $this->partenaires3->add($partenaires3);
            $partenaires3->setPermission3($this);
        }

        return $this;
    }

    public function removePartenaires3(Partenaires $partenaires3): self
    {
        if ($this->partenaires3->removeElement($partenaires3)) {
            // set the owning side to null (unless already changed)
            if ($partenaires3->getPermission3() === $this) {
                $partenaires3->setPermission3(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Partenaires>
     */
    public function getPartenaires4(): Collection
    {
        return $this->partenaires4;
    }

    public function addPartenaires4(Partenaires $partenaires4): self
    {
        if (!$this->partenaires4->contains($partenaires4)) {
            $this->partenaires4->add($partenaires4);
            $partenaires4->setPermission4($this);
        }

        return $this;
    }

    public function removePartenaires4(Partenaires $partenaires4): self
    {
        if ($this->partenaires4->removeElement($partenaires4)) {
            // set the owning side to null (unless already changed)
            if ($partenaires4->getPermission4() === $this) {
                $partenaires4->setPermission4(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Partenaires>
     */
    public function getPartenaires5(): Collection
    {
        return $this->partenaires5;
    }

    public function addPartenaires5(Partenaires $partenaires5): self
    {
        if (!$this->partenaires5->contains($partenaires5)) {
            $this->partenaires5->add($partenaires5);
            $partenaires5->setPermission5($this);
        }

        return $this;
    }

    public function removePartenaires5(Partenaires $partenaires5): self
    {
        if ($this->partenaires5->removeElement($partenaires5)) {
            // set the owning side to null (unless already changed)
            if ($partenaires5->getPermission5() === $this) {
                $partenaires5->setPermission5(null);
            }
        }

        return $this;
    }

    public function getStructure(): ?Structures
    {
        return $this->structure;
    }

    public function setStructure(?Structures $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function __toString():string
    {
        return $this->activite;
    }

    
}
