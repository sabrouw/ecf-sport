<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\StructuresRepository;
use Doctrine\ORM\Mapping as ORM;




#[ApiResource (collectionOperations: ['get'], itemOperations: ['get'])]
#[ORM\Entity(repositoryClass: StructuresRepository::class)]




class Structures extends User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

         
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;
 

    #[ORM\ManyToOne(inversedBy: 'ass_structures')]
    private ?Partenaires $partenaires = null;

    #[ORM\ManyToOne(inversedBy: 'structures')]
    private ?Partenaires $ass_partenaires = null;

    #[ORM\OneToOne(mappedBy: 'structures', cascade: ['persist', 'remove'])]
    private ?User $yes = null;
    

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
  

    public function getPartenaires(): ?Partenaires
    {
        return $this->partenaires;
    }

    public function setPartenaires(?Partenaires $partenaires): self
    {
        $this->partenaires = $partenaires;

        return $this;
    }

    public function getAssPartenaires(): ?Partenaires
    {
        return $this->ass_partenaires;
    }

    public function setAssPartenaires(?Partenaires $ass_partenaires): self
    {
        $this->ass_partenaires = $ass_partenaires;

        return $this;
    }

    public function getYes(): ?User
    {
        return $this->yes;
    }

    public function setYes(?User $yes): self
    {
        // unset the owning side of the relation if necessary
        if ($yes === null && $this->yes !== null) {
            $this->yes->setStructures(null);
        }

        // set the owning side of the relation if necessary
        if ($yes !== null && $yes->getStructures() !== $this) {
            $yes->setStructures($this);
        }

        $this->yes = $yes;

        return $this;
    }

    

    
}
