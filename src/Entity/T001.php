<?php

namespace App\Entity;

use App\Repository\T001Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: T001Repository::class)]
class T001
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 4)]
    private ?string $bukrs = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBukrs(): ?string
    {
        return $this->bukrs;
    }

    public function setBukrs(string $bukrs): self
    {
        $this->bukrs = $bukrs;

        return $this;
    }
}
