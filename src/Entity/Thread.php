<?php

namespace App\Entity;

use App\Repository\ThreadRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ThreadRepository::class)]
#[ORM\Table(name: 'threads')]
class Thread
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "thread_id")]
    private int $id;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $body = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $image = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $likes = 0;

    public function getId(): int
    {
        return $this->id;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getImage(): ?array
    {
        return $this->image;
    }

    public function setImage(?array $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }
}
