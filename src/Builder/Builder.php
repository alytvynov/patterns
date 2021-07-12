<?php

namespace App\Builder;

interface Builder
{
    public function reset(): self;
    public function createStepA(): self;
    public function createStepB(): self;
    public function createStepZ(): self;
}
