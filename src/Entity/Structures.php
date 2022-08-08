<?php

namespace App\Entity;

use App\Repository\StructuresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructuresRepository::class)]
class Structures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $login = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'structures', targetEntity: Partenaires::class)]
    private Collection $id_partenaires;

    public function __construct()
    {
        $this->id_partenaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

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

    /**
     * @return Collection<int, Partenaires>
     */
    public function getIdPartenaires(): Collection
    {
        return $this->id_partenaires;
    }

    public function addIdPartenaire(Partenaires $idPartenaire): self
    {
        if (!$this->id_partenaires->contains($idPartenaire)) {
            $this->id_partenaires->add($idPartenaire);
            $idPartenaire->setStructures($this);
        }

        return $this;
    }

    public function removeIdPartenaire(Partenaires $idPartenaire): self
    {
        if ($this->id_partenaires->removeElement($idPartenaire)) {
            // set the owning side to null (unless already changed)
            if ($idPartenaire->getStructures() === $this) {
                $idPartenaire->setStructures(null);
            }
        }

        return $this;
    }
}
