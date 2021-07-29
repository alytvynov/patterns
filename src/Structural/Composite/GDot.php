<?php

namespace App\Structural\Composite;

class GDot implements Graphic
{
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function draw(): void
    {
        echo sprintf(" - Dot (%s|%s)\n", $this->x, $this->y);
    }

    public function move(int $x, int $y): void
    {
        $this->x += $x;
        $this->y += $y;
    }
}
