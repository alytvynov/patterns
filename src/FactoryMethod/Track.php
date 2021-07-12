<?php

namespace App\FactoryMethod;

class Track implements Transport
{
    public function getDeliveryHours(): int
    {
        return 4;
    }

    public function getDeliveryInfo(): string
    {
        return 'Delivery by Track';
    }

    public function deliver(): bool
    {
        return true;
    }
}
