<?php

namespace App\Structural\Adapter;

class SquarePeg
{
    private int $width;

    public function __construct(int $squareSide)
    {
        $this->width = $squareSide;
    }

    public function getWidth(): int
    {
        return $this->width;
    }
}
