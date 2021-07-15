<?php

namespace App\Creational\Prototype;

abstract class Shape
{
    protected int $x;
    protected int $y;

    public function __clone()
    {
    }

    abstract public function print(): void;

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getY(): int
    {
        return $this->y;
    }
}
