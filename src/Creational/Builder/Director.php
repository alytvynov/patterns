<?php

namespace App\Creational\Builder;

class Director
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    public function make(): self
    {
        $this->builder->createStepA()->createStepB()->createStepZ();

        return $this;
    }

    public function getBuilder(): Builder
    {
        return $this->builder;
    }
}
