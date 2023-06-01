<?php

namespace App\Entity;

use App\Repository\ZtinmmTkHRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZtinmmTkHRepository::class)]
class ZtinmmTkH
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $konkurs_id = null;

    #[ORM\Column(length: 40)]
    private ?string $konkurs_nr = null;

    #[ORM\Column(length: 255)]
    private ?string $konkurs_name = null;


    public function getKonkursId(): ?int
    {
        return $this->konkurs_id;
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

    public function getKonkursName(): ?string
    {
        return $this->konkurs_name;
    }

    public function setKonkursName(string $konkurs_name): self
    {
        $this->konkurs_name = $konkurs_name;

        return $this;
    }



}
