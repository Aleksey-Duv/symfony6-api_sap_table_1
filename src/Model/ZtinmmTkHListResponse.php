<?php

namespace App\Model;

class ZtinmmTkHListResponse
{
    /**
     * @var  ZtinmmTkHListItem[]
     */
    private array $items;

    /**
     * @param ZtinmmTkHListItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return ZtinmmTkHListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

}