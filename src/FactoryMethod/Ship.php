<?php

namespace App\FactoryMethod;

class Ship implements Transport
{
    public function getDeliveryHours(): int
    {
        return 20;
    }

    public function getDeliveryInfo(): string
    {
        return 'Delivery by Ship';
    }

    public function deliver(): bool
    {
        return true;
    }
}
