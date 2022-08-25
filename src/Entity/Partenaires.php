<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PartenairesRepository;
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
        private ?string $login = null;

    #[ORM\Column(length: 255)]
    private ?string $email= null;

    #[ORM\Column(length: 255)]
        private ?string $Password = null;

    #[ORM\Column(length: 255)]
        private ?string $adresse_postale = null;

    #[ORM\Column(nullable: true)]
        private array $roles = [];

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword():?string
    {
        return $this->Password;
    }

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
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

   

    
    

   

    

    

    

    
}
