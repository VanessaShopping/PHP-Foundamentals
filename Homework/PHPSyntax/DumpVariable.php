<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Jan-17
 * Time: 8:15 PM
 */

$str = "Hello";
$intNumber = 15;
$floatNumber = 1.234;
$arr = array(1, 2, 3);
$obj = (object) [2,34];

$to_be_Checked = array($str, $intNumber, $floatNumber, $arr, $obj);

foreach ($to_be_Checked as $value) {

    if (is_numeric($value)) {
        var_dump($value);
        echo "<br>";
    } else {
        echo gettype($value) . "<br>";
    }
}

// echo gettype($str);
// var_dump($intNumber);
// var_dump($floatNumber);
// echo gettype($arr) . "</br>";
// echo gettype($obj);