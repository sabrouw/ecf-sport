<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PartenairesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ApiResource (collectionOperations: ['get'], itemOperations: ['get'])]
#[ORM\Entity(repositoryClass: PartenairesRepository::class)]


class Partenaires
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
        private ?string $name = null;
      
    #[ORM\Column(length: 255)]
        private ?string $adresse = null;

    #[ORM\OneToOne(mappedBy: 'partenaire', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'partenaires')]
    private ?Permissions $permission1 = null;

    #[ORM\ManyToOne(inversedBy: 'partenaires2')]
    private ?Permissions $permission2 = null;

    #[ORM\ManyToOne(inversedBy: 'partenaires3')]
    private ?Permissions $permission3 = null;

    #[ORM\ManyToOne(inversedBy: 'partenaires4')]
    private ?Permissions $permission4 = null;

    #[ORM\ManyToOne(inversedBy: 'partenaires5')]
    private ?Permissions $permission5 = null;

    #[ORM\Column]
    private ?bool $statut = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $img = null;

    #[ORM\OneToMany(mappedBy: 'partenaires', targetEntity: Structures::class)]
    private Collection $structures;

    public function __construct()
    {
        $this->structures = new ArrayCollection([]);
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


    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setPartenaire(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getPartenaire() !== $this) {
            $user->setPartenaire($this);
        }

        $this->user = $user;

        return $this;
    }

    public function getPermission1(): ?Permissions
    {
        return $this->permission1;
    }

    public function setPermission1(?Permissions $permission1): self
    {
        $this->permission1 = $permission1;

        return $this;
    }

    public function getPermission2(): ?Permissions
    {
        return $this->permission2;
    }

    public function setPermission2(?Permissions $permission2): self
    {
        $this->permission2 = $permission2;

        return $this;
    }

    public function getPermission3(): ?Permissions
    {
        return $this->permission3;
    }

    public function setPermission3(?Permissions $permission3): self
    {
        $this->permission3 = $permission3;

        return $this;
    }

    public function getPermission4(): ?Permissions
    {
        return $this->permission4;
    }

    public function setPermission4(?Permissions $permission4): self
    {
        $this->permission4 = $permission4;

        return $this;
    }

    public function getPermission5(): ?Permissions
    {
        return $this->permission5;
    }

    public function setPermission5(?Permissions $permission5): self
    {
        $this->permission5 = $permission5;

        return $this;
    }

    
    public function __toString()
    {
        return $this->name;
    }
    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
    
    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

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
        if (!$this->structures->constains($structure)) {
            $this->structures->add($structure);
            $structure->setPartenaires($this);
        }

        return $this;
    }

    public function removeStructure(Structures $structure): self
    {
        if ($this->structures->removeElement($structure)) {
            // set the owning side to null (unless already changed)
            if ($structure->getPartenaires() === $this) {
                $structure->setPartenaires(null);
            }
        }

        return $this;
    }

    

  



   

   

    
    
    
    }

    

    

    

    

