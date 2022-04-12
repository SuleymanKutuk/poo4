<?php
require_once 'Car.php';


$car = new Car();

try {
    $car->start();
} catch (Exception $e) {
    echo 'Vous ne pouvez pas partir avec le frein a main' . '<br>';
    $car->setHasParkBrake(true);
} finally {
    echo 'Ma voiture roule comme un donut';
}