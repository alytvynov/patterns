<?php

namespace App\Structural\Bridge;

interface Device
{
    public function isEnabled(): bool;

    public function enable(): void;

    public function disable(): void;

    public function getVolume(): int;

    public function setVolume(int $volume): void;

    public function getChannel(): int;

    public function setChannel(int $channel): void;
}
