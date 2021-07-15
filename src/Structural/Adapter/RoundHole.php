<?php

namespace App\Structural\Adapter;

class RoundHole
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

    public function fits(RoundPeg $peg): bool
    {
        return $this->getRadius() >= $peg->getRadius();
    }

    public function printFits(RoundPeg $peg): void
    {
        if ($this->fits($peg)) {
            echo sprintf("Peg fits hole\n");
        } else {
            echo sprintf("Peg DOES NOT fit hole\n");
        }
    }
}
