<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\StructuresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;



#[ApiResource (collectionOperations: ['get'], itemOperations: ['get'])]
#[ORM\Entity(repositoryClass: StructuresRepository::class)]



class Structures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

         
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;
 

    #[ORM\ManyToOne(inversedBy: 'structures')]
    private ?Categorie $categorie = null;

   
    #[ORM\OneToOne(mappedBy: 'structure', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'structures')]
    private ?Permissions $permission1 = null;

    

    #[ORM\ManyToOne(inversedBy: 'structures2')]
    private ?Permissions $permission2 = null;

    #[ORM\ManyToOne]
    private ?Permissions $permission3 = null;

    #[ORM\ManyToOne(inversedBy: 'structure1')]
    private ?Permissions $permission4 = null;

    #[ORM\ManyToOne]
    private ?Permissions $permission5 = null;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Permissions::class)]
    private Collection $permissions;

    #[ORM\Column]
    private ?bool $statut = null;

    #[ORM\ManyToOne(inversedBy: 'structures')]
    private ?Partenaires $partenaires = null;

    #[ORM\OneToMany(mappedBy: 'struct', targetEntity: Permissions::class)]
    private Collection $perms;

    public function __construct()
    {
        $this->permissions = new ArrayCollection();
        $this->perms = new ArrayCollection();
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
            $this->user->setStructure(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getStructure() !== $this) {
            $user->setStructure($this);
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

    
    /**
     * @return Collection<int, self>
     */
    public function getStructures(): Collection
    {
        return $this->structures;
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

    /**
     * @return Collection<int, Permissions>
     */
    public function getPermissions(): Collection
    {
        return $this->permissions;
    }

    public function addPermission(Permissions $permission): self
    {
        if (!$this->permissions->contains($permission)) {
            $this->permissions->add($permission);
            $permission->setStructure($this);
        }

        return $this;
    }

    public function removePermission(Permissions $permission): self
    {
        if ($this->permissions->removeElement($permission)) {
            // set the owning side to null (unless already changed)
            if ($permission->getStructure() === $this) {
                $permission->setStructure(null);
            }
        }

        return $this;
    }

   
    public function __toString()
    {
        return $this->getName();
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

    public function getPartenaires(): ?Partenaires
    {
        return $this->partenaires;
    }

    public function setPartenaires(?Partenaires $partenaires): self
    {
        $this->partenaires = $partenaires;

        return $this;
    }

    /**
     * @return Collection<int, Permissions>
     */
    public function getPerms(): Collection
    {
        return $this->perms;
    }

    public function addPerm(Permissions $perm): self
    {
        if (!$this->perms->contains($perm)) {
            $this->perms->add($perm);
            $perm->setStruct($this);
        }

        return $this;
    }

    public function removePerm(Permissions $perm): self
    {
        if ($this->perms->removeElement($perm)) {
            // set the owning side to null (unless already changed)
            if ($perm->getStruct() === $this) {
                $perm->setStruct(null);
            }
        }

        return $this;
    }

    
 
   
  

    
    

    
}
