<?php

namespace App\Structural\Adapter;

class SquarePegAdapter extends RoundPeg
{
    private SquarePeg $squarePeg;

    public function setSquarePeg(SquarePeg $squarePeg): self
    {
        $this->squarePeg = $squarePeg;

        return $this;
    }

    public function getRadius(): int
    {
        return $this->squarePeg->getWidth() * sqrt(2) / 2;
    }
}
