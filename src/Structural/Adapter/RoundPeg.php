<?php

namespace App\Structural\Adapter;

class RoundPeg
{
    private int $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }
}
