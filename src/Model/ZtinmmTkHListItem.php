<?php

namespace App\Model;

class ZtinmmTkHListItem
{
    private $id;

    private ?string $konkurs_nr ;

    private ?string $konkurs_name;

    private ?string $Bukrs ;

    /**
     * @param $id
     * @param string|null $konkurs_nr
     * @param string|null $konkurs_name
     * @param string|null $Bukrs
     */
    public function __construct($id, ?string $konkurs_nr, ?string $konkurs_name, ?string $Bukrs)
    {
        $this->id = $id;
        $this->konkurs_nr = $konkurs_nr;
        $this->konkurs_name = $konkurs_name;
        $this->Bukrs = $Bukrs;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getKonkursNr(): ?string
    {
        return $this->konkurs_nr;
    }

    /**
     * @return string|null
     */
    public function getKonkursName(): ?string
    {
        return $this->konkurs_name;
    }

    /**
     * @return string|null
     */
    public function getBukrs(): ?string
    {
        return $this->Bukrs;
    }


}