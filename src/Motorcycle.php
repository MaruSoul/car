<?php

namespace Mary\Car;

class Motorcycle extends Movable implements MovableInterface, VehicleInterface
{
    public static function getVechicleType()
    {
        return 'passenger car';
    }
}
