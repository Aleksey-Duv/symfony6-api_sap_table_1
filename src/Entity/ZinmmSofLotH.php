<?php

namespace App\Entity;

use App\Repository\ZinmmSofLotHRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZinmmSofLotHRepository::class)]
class ZinmmSofLotH
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 12)]
    private ?string $konkurs_id = null;

    #[ORM\Column(length: 30)]
    private ?string $lot_nr = null;

    #[ORM\Column(length: 132)]
    private ?string $lot_name = null;

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

    public function getLotNr(): ?string
    {
        return $this->lot_nr;
    }

    public function setLotNr(string $lot_nr): self
    {
        $this->lot_nr = $lot_nr;

        return $this;
    }

    public function getLotName(): ?string
    {
        return $this->lot_name;
    }

    public function setLotName(string $lot_name): self
    {
        $this->lot_name = $lot_name;

        return $this;
    }
}
