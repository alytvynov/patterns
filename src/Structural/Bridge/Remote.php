<?php

namespace App\Structural\Bridge;

class Remote
{
    protected Device $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeDown()
    {
        $this->device->setVolume($this->device->getVolume() - 10);
    }

    public function volumeUp()
    {
        $this->device->setVolume($this->device->getVolume() + 10);
    }

    public function channelDown()
    {
        $this->device->setVolume($this->device->getChannel() - 1);
    }

    public function channelUp()
    {
        $this->device->setVolume($this->device->getChannel() + 1);
    }
}
