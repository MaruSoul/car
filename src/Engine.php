<?php

namespace Mary\Car;

class Engine implements EngineInterface
{
    protected float $maxSpeed;
    protected float $minSpeed;

    public function __construct(float $maxSpeed,float $minSpeed = 0)
    {
        $this->maxSpeed = $maxSpeed;
        $this->minSpeed = $minSpeed;
    }

    public function getMaxSpeed(): float
    {
        return $this->maxSpeed;
    }

    public function getMinSpeed(): float
    {
        return $this->minSpeed;
    }
}