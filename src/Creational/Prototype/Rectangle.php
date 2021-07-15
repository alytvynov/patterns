<?php

namespace App\Creational\Prototype;

class Rectangle extends Shape
{
    private int $width;
    private int $height;

    public function __clone()
    {
    }

    public function print(): void
    {
        echo sprintf("Rectangle x %s, y %s, width %s, height %s\n", $this->x, $this->y, $this->width, $this->height);
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
