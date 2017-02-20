<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:56 AM
 */
include "RawData.php";
$numberOfCars = intval(trim(fgets(STDIN)));
$cars = [];
for ($i = 0; $i < $numberOfCars; $i++) {
    $carInfo = explode(" ", trim(fgets(STDIN)));
    list($model, $engineSpeed, $enginePower,
        $cargoWeight, $cargoType, $tyre1Pressure,
        $tyre1Age, $tyre2Pressure, $tyre2Age,
        $tyre3Pressure, $tyre3Age,
        $tyre4Pressure, $tyre4Age) =
        [$carInfo[0], intval($carInfo[1]), intval($carInfo[2]),
            intval($carInfo[3]), $carInfo[4], floatval($carInfo[5]),
            intval($carInfo[6]), floatval($carInfo[7]), intval($carInfo[8]),
            floatval($carInfo[9]), intval($carInfo[10]),
            floatval($carInfo[11]), intval($carInfo[12])];
    $engine = new Engine($engineSpeed, $enginePower);
    $cargo = new Cargo($cargoWeight, $cargoType);
    $tyre1 = new Tyre($tyre1Pressure, $tyre1Age);
    $tyre2 = new Tyre($tyre2Pressure, $tyre2Age);
    $tyre3 = new Tyre($tyre3Pressure, $tyre3Age);
    $tyre4 = new Tyre($tyre4Pressure, $tyre4Age);
    $car = new Car($model, $engine, $cargo,
        $tyre1, $tyre2, $tyre3, $tyre4);
    $cars[] = $car;
}
$type = trim(fgets(STDIN));
$output = [];
foreach ($cars as $car) {
    if ($car->getCargo()->getType() === $type) {
        if ($type === 'flamable' && $car->getEngine()->getPower() > 250) {
            $output[] = $car->getModel();
        } else if ($type === 'fragile') {
            $tyres = $car->getTyres();
            foreach ($tyres as $tyre) {
                if ($tyre->getPressure() < 1) {
                    $output[] = $car->getModel();
                    break;
                }
            }
        }
    }
}
foreach ($output as $outputCar) {
    echo $outputCar . PHP_EOL;
}