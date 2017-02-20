<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:58 AM
 */
require_once "CarSalesman.php";

$n = intval(trim(fgets(STDIN)));
$engines = [];
for ($i = 0; $i < $n; $i++) {
    $engineInfo = explode(" ", trim(fgets(STDIN)));
    list($model, $power, $displacement, $efficiency) =
        [$engineInfo[0], floatval($engineInfo[1]), 'n/a', 'n/a'];
    if (count($engineInfo) > 2) {
        if (is_numeric($engineInfo[2])) {
            $displacement = floatval($engineInfo[2]);
        } else {
            $efficiency = $engineInfo[2];
        }
    }
    if (count($engineInfo) > 3) {
        $efficiency = $engineInfo[3];
    }
    $engine = new Engine($model, $power, $displacement, $efficiency);
    $engines[$model] = $engine;
}
$m = intval(trim(fgets(STDIN)));
$cars = [];
for ($i = 0; $i < $m; $i++) {
    $carInfo = explode(" ", trim(fgets(STDIN)));
    list($model, $carEngine, $weight, $color) =
        [$carInfo[0], $carInfo[1], 'n/a', 'n/a'];
    if (count($carInfo) > 2) {
        if (is_numeric($carInfo[2]) && $carInfo[2] != 0) {
            $weight = floatval($carInfo[2]);
        } else {
            $color = $carInfo[2];
        }
    }
    if (count($carInfo) > 3) {
        $color = $carInfo[3];
    }
    $carEngine = $engines[$carEngine];
    $car = new Car($model, $carEngine, $weight, $color);
    $cars[] = $car;
}
foreach ($cars as $car){
    echo $car;
}