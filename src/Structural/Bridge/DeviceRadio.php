<?php

namespace App\Structural\Bridge;

class DeviceRadio implements Device
{
    private bool $enabled;
    private int $volume;
    private int $channel;

    public function __construct()
    {
        $this->enabled = true;
        $this->volume = 5;
        $this->channel = 105;
    }

    public function isEnabled(): bool
    {
        return false;
    }

    public function enable(): void
    {
        $this->enabled = true;
    }

    public function disable(): void
    {
        $this->enabled = false;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channel): void
    {
        $this->channel = $channel;
    }
}
