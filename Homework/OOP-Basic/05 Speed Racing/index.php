<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 15-Feb-17
 * Time: 11:11 AM
 */
include_once 'Cars.php';
$n = intval(fgets(STDIN));
$cars = [];
while ($n--) { // "", 0 , false, null == FALSE. Когато Н стане 0 цикъла спира

    $line = trim(fgets(STDIN));
    $tokens = explode(" ", $line);
    $model = $tokens[0];
    $startFuel = floatval($tokens[1]);
    $fuelCost = floatval($tokens[2]);


    $car = new Car($model, $startFuel, $fuelCost);
    $cars[$model] = $car;
}

$cmd = trim(fgets(STDIN));

while ($cmd != 'End') {
    $token = explode(" ", $cmd);
    $model = $token[1];
    $km = floatval($token[2]);
    $car = $cars[$model];

    try {
        $car->Drive($km);
    } catch (Exception $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }
    $cmd = trim(fgets(STDIN));
}


foreach ($cars as $car) {
    echo $car . PHP_EOL;
}










