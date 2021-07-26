<?php

namespace App\Structural\Bridge;

class AdvancedRemote extends Remote
{
    public function mute(): void
    {
        $this->device->setVolume(0);
    }
}
