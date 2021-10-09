<?php

namespace Mary\Car;

abstract class Movable implements MovableInterface
{
    const STATUS_STOP = 'stop';
    const STATUS_START = 'start';

    private string $model;
    
    private Engine $engine;
    
    private float $currentSpeed = 0;

    private $status = self::STATUS_STOP;

    public function __construct(string $model, Engine $engine)
    {
        $this->model = $model;
        $this->engine = $engine; 
        return $this;
    }

    public function start(): static
    {
        if ($this->status != self::STATUS_STOP) {
            echo "Error. Car allready moving!!!";
            echo PHP_EOL;
            return $this;
        }
        $this->status = self::STATUS_START;
        $this->currentSpeed = $this->engine->getMinSpeed();
        echo "{$this->model} start moving";
        echo PHP_EOL;
        echo "Current speed is {$this->currentSpeed} km/h";
        echo PHP_EOL;

        return $this;
    }

    public function stop(): static
    {
        if ($this->status != self::STATUS_START) {
            echo "Error. Car don't moving!!!";
            echo PHP_EOL;
            return $this;
        }
        $this->status = self::STATUS_STOP;
        $this->currentSpeed = 0;
        echo "{$this->model} stop moving";
        echo PHP_EOL;
        echo "Current speed is {$this->currentSpeed} km/h";
        echo PHP_EOL;

        return $this;
    }

    public function up(): static
    {
        if ($this->status != self::STATUS_START) {
            echo "Error. Car must start to moving!!!";
            echo PHP_EOL;
            return $this;
        }
        $newSpeed = $this->currentSpeed + 20;

        if ($this->currentSpeed == $this->engine->getMaxSpeed()) {
            echo "Current speed is allready max ({$this->currentSpeed} km/h).";
        } elseif ($newSpeed >= $this->engine->getMaxSpeed()) {
            echo "Current speed is {$newSpeed} km/h. This is max";
            $this->currentSpeed = $this->engine->getMaxSpeed();
        } else {
            $this->currentSpeed = $newSpeed;
            echo "Current speed is {$this->currentSpeed} km/h.";
        }
        echo PHP_EOL;

        return $this;
    }

    public function down(): static
    {
        if ($this->status != self::STATUS_START) {
            echo "Error. Car must start to moving!!!";
            echo PHP_EOL;
            return $this;
        }

        $newSpeed = $this->currentSpeed - 20;

        if ($this->currentSpeed == $this->engine->getMinSpeed()) {
            echo "Current speed is allready min ({$this->currentSpeed} km/h).";
        } elseif ($newSpeed <= $this->engine->getMinSpeed()) {
            echo "Current speed is {$newSpeed} km/h. This is min";
            $this->currentSpeed = $this->engine->getMinSpeed();
        } else {
            $this->currentSpeed = $newSpeed;
            echo "Current speed is {$this->currentSpeed} km/h.";
        }
        echo PHP_EOL;

        return $this;
    }
}
