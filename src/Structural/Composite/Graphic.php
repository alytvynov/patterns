<?php

namespace App\Structural\Composite;

interface Graphic
{
    public function move(int $x, int $y): void;

    public function draw(): void;
}
