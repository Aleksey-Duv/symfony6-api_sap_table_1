<?php
declare(strict_types=1);
namespace App\Model;

class ZtinmmTkHListItem
{

    public function __construct(private readonly int $konkurs_id, private readonly ?string $konkurs_nr, private readonly ?string $konkurs_name)
    {
    }

    public function getkonkurs_id(): int
    {
        return $this->konkurs_id;
    }


    public function getKonkursNr(): ?string
    {
        return $this->konkurs_nr;
    }


    public function getKonkursName(): ?string
    {
        return $this->konkurs_name;
    }



}