<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:51 PM
 */
$arrayInput = trim(fgets(STDIN));
$arrNumbers = explode(" ", $arrayInput);
$sum = 0;

foreach ($arrNumbers as $value){
    $value = strrev($value);
    $sum += $value;
}
echo $sum;