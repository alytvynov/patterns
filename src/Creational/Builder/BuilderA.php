<?php

namespace App\Creational\Builder;

class BuilderA implements Builder
{
    public function reset(): self
    {
        return $this;
    }

    public function createStepA(): self
    {
        return $this;
    }

    public function createStepB(): self
    {
        return $this;
    }

    public function createStepZ(): self
    {
        return $this;
    }

    public function getResult(): ProductA
    {
        return new ProductA();
    }
}
