<?php

namespace Mary\Car;

class Truck extends Car implements  MovableInterface, VehicleInterface
{
    public static function getVechicleType()
    {
        return 'truck car';
    }
}
