<?php

namespace App\Structural\Composite;

class GGroup implements Graphic
{
    /**
     * @var Graphic[]
     */
    protected array $graphics;

    public function __construct(array $graphics = [])
    {
        $this->graphics = $graphics;
    }

    public function addElement(Graphic $graphic)
    {
        $this->graphics[] = $graphic;
    }

    public function move(int $x, int $y): void
    {
        foreach ($this->graphics as $graphic) {
            $graphic->move($x, $y);
        }
    }

    public function draw(): void
    {
        echo sprintf("Group\n");
        foreach ($this->graphics as $graphic) {
            $graphic->draw();
        }
    }
}
