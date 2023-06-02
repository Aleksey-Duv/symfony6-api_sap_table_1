<?php

namespace App\Model;

class ZtinmmTkHListResponse
{

    /**
     * @param ZtinmmTkHListItem[] $items
     */
    public function __construct(private readonly array $items)
    {
    }

    /**
     * @return ZtinmmTkHListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

}