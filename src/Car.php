<?php

namespace Mary\Car;

class Car extends Movable implements MovableInterface, VehicleInterface
{
    public static function getVechicleType()
    {
        return 'passenger car';
    }
}
