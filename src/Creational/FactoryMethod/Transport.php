<?php

namespace App\Creational\FactoryMethod;

interface Transport
{
    public function getDeliveryHours(): int;

    public function getDeliveryInfo(): string;

    public function deliver(): bool;
}
