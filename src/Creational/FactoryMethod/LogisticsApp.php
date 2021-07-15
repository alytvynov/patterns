<?php

namespace App\Creational\FactoryMethod;

class LogisticsApp
{
    public function printInfo(Logistics $logistics): void
    {
        echo sprintf(
            "%s\n", $logistics->getDeliveryInformation()
        );
    }
}
