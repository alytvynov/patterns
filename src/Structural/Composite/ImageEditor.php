<?php

namespace App\Structural\Composite;

class ImageEditor
{
    protected Graphic $graphic;

    public function __construct(Graphic $graphic)
    {
        $this->graphic = $graphic;
    }

    public function draw(): void
    {
        $this->graphic->draw();
    }
}
