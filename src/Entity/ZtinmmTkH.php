<?php

namespace App\Entity;

use App\Repository\ZtinmmTkHRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZtinmmTkHRepository::class)]
class ZtinmmTkH
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 12)]
    private ?string $konkurs_id = null;

    #[ORM\Column(length: 40)]
    private ?string $konkurs_nr = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKonkursId(): ?string
    {
        return $this->konkurs_id;
    }

    public function setKonkursId(string $konkurs_id): self
    {
        $this->konkurs_id = $konkurs_id;

        return $this;
    }

    public function getKonkursNr(): ?string
    {
        return $this->konkurs_nr;
    }

    public function setKonkursNr(string $konkurs_nr): self
    {
        $this->konkurs_nr = $konkurs_nr;

        return $this;
    }
}
