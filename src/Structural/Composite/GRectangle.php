<?php


namespace App\Structural\Composite;

class GRectangle extends GDot implements Graphic
{
    protected int $width;
    protected int $height;

    public function __construct(int $x, int $y, int $width, int $height)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;
    }

    public function draw(): void
    {
        echo sprintf(
            " - Rectangle with center in (%s|%s), width %s and height %s\n",
            $this->x,
            $this->y,
            $this->width,
            $this->height
        );
    }
}
