<?php

namespace App\Creational\FactoryMethod;

abstract class Logistics
{
    public function getDeliveryInformation(Transport $transport = null): string
    {
        $transport = $transport ?? $this->createTransport();

        return sprintf(
            '%s: %s hours', $transport->getDeliveryInfo(), $transport->getDeliveryHours()
        );
    }

    abstract public function createTransport() : Transport;
}
