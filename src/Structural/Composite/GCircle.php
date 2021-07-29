<?php


namespace App\Structural\Composite;

class GCircle extends GDot implements Graphic
{
    protected int $r;

    public function __construct(int $x, int $y, int $r)
    {
        parent::__construct($x, $y);
        $this->r = $r;
    }

    public function draw(): void
    {
        echo sprintf(" - Circle with center in (%s|%s) and radius %s\n", $this->x, $this->y, $this->r);
    }
}
