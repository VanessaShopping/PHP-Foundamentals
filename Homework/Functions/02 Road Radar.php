<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 10-Feb-17
 * Time: 12:30 PM
 */
$speed = trim(fgets(STDIN));
$area = trim(fgets(STDIN));
echo solve($speed, $area);

function solve($speed, $area)
{
    $speedLimimit = 0;
    switch ($area) {
        case 'motorway' :
            $speedLimimit = 130;
            break;
        case 'interstate' :
            $speedLimimit = 90;
            break;
        case 'city' :
            $speedLimimit = 50;
            break;
        case 'residential' :
            $speedLimimit = 20;
            break;
        default:
            echo "Not a valid input";
    }

    if ($speedLimimit <= $speed) {
        $overSpeed = $speed - $speedLimimit;
        if ($overSpeed <=  20) {
            return 'speeding';
        } else if ($overSpeed <= 40) {
            return 'excessive speeding';
        } else {
            return 'reckless driving';
        }
    }
}