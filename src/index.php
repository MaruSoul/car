<?php

namespace Mary\Car;

require_once __DIR__ . "/../vendor/autoload.php";

$engine = new Engine(100);
$car = new Car('Suzuki', $engine);

$car->start();
// $car->start();
// $car->stop();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->up();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();
$car->down();


$superEngine = new SuperEngine(100);
$superEngine->setTurbo(true);
$motorcycle = new Motorcycle('Ducati', $superEngine);
$motorcycle->start();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->up();
$motorcycle->stop();

