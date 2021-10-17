<?php

namespace Mary\Car;

class SuperEngine extends Engine implements EngineInterface
{

    private bool $turbo = false;

    public function setTurbo(bool $turbo)
    {
        $this->turbo = $turbo;
    }

    public function getTurbo(): bool
    {
        return $this->turbo;
    }

    public function getMaxSpeed(): float
    {
        if ($this->turbo) {
            return $this->maxSpeed * 2;
        }
        return $this->maxSpeed;
    }
}
