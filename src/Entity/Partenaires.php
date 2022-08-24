<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PartenairesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    
    private ?string $login = null;

    #[ORM\Column(length: 255)]
    private ?string $email_gerant = null;

    #[ORM\Column(length: 255)]
    
    private ?string $Password = null;

    #[ORM\Column(length: 255)]
    
    private ?string $adresse_postale = null;

    #[ORM\OneToMany(mappedBy: 'partenaires', targetEntity: Structures::class, orphanRemoval: true)]
    
    private Collection $structures_assoce;

    #[ORM\OneToMany(mappedBy: 'ass_partenaires', targetEntity: Structures::class)]
    
    private Collection $structures_association;

    public function __construct()
    {
        $this->structures_assoce = new ArrayCollection();
        $this->structures_association = new ArrayCollection();
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

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getEmailGerant(): ?string
    {
        return $this->email_gerant;
    }

    public function setEmailGerant(string $email_gerant): self
    {
        $this->email_gerant = $email_gerant;

        return $this;
    }

    /*public function getPassword(): ?string
    {
        return $this->Password;
    }*/

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

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

    /**
     * @return Collection<int, structures>
     */
    public function getStructuresAssociation(): Collection
    {
        return $this->structures_association;
    }

    public function addStructuresAssociation(structures $structuresAssociation): self
    {
        if (!$this->structures_association->contains($structuresAssociation)) {
            $this->structures_association->add($structuresAssociation);
            $structuresAssociation->setAssPartenaires($this);
        }

        return $this;
    }

    public function removeStructuresAssociation(structures $structuresAssociation): self
    {
        if ($this->structures_association->removeElement($structuresAssociation)) {
            // set the owning side to null (unless already changed)
            if ($structuresAssociation->getAssPartenaires() === $this) {
                $structuresAssociation->setAssPartenaires(null);
            }
        }

        return $this;
    }

    

    

    

    
}
