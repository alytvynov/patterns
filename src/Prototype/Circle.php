<?php

namespace App\Prototype;

class Circle extends Shape
{
    private int $radius;

    public function __clone()
    {
    }

    public function print(): void
    {
        echo sprintf("Circle x %s, y %s, radius %s\n", $this->x, $this->y, $this->radius);
    }

    public function setRadius(int $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }
}
