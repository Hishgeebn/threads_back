<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "user_id")]
    private int $id;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(type: Types::BLOB)]
    private $profieImg;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bio = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $link = null;

    #[ORM\Column]
    private bool $isPrivate;

    #[ORM\Column]
    private bool $isActive;

    #[ORM\Column(length: 255)]
    private string $lastLoginIP;

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

    public function getProfieImg()
    {
        return $this->profieImg;
    }

    public function setProfieImg($profieImg): self
    {
        $this->profieImg = $profieImg;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function isPrivate(): bool
    {
        return $this->isPrivate;
    }

    public function setPrivate(bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getLastLoginIP(): string
    {
        return $this->lastLoginIP;
    }

    public function setLastLoginIP(string $lastLoginIP): self
    {
        $this->lastLoginIP = $lastLoginIP;

        return $this;
    }
}
