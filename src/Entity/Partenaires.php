<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PartenairesRepository;
use Doctrine\ORM\Mapping as ORM;


#[ApiResource (collectionOperations: ['get'], itemOperations: ['get'])]
#[ORM\Entity(repositoryClass: PartenairesRepository::class)]


class Partenaires extends User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
        private ?string $name = null;
      
    #[ORM\Column(length: 255)]
        private ?string $adresse_postale = null;

    #[ORM\OneToOne(mappedBy: 'Partenaires', cascade: ['persist', 'remove'])]
    private ?User $user = null;

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


    public function getAdressePostale(): ?string
    {
        return $this->adresse_postale;
    }

    public function setAdressePostale(string $adresse_postale): self
    {
        $this->adresse_postale = $adresse_postale;

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
            $this->user->setPartenaires(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getPartenaires() !== $this) {
            $user->setPartenaires($this);
        }

        $this->user = $user;

        return $this;
    }

    
    }

    

    

    

    

