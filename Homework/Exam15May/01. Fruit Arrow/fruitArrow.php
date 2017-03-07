<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 06-Mar-17
 * Time: 11:41 AM
 */
$picture = ">>";
$fruit = "";
$sumOfDigits = 0;

    $fruit = $_GET['fruit'];
    for ($i = 0; $i < strlen($fruit); $i++) {
        $sumOfDigits += ord($fruit[$i]);
    }

$Line = substr($sumOfDigits, 0, 1);
$leftLine = "";
for ($i = 0; $i < $Line; $i++) {
    $leftLine .= '-';
}


$Line = substr(strrev($sumOfDigits), 0, 1);
$rightLine = '';
for ($i = 0; $i < $Line; $i++) {
    $rightLine .= '-';
}

$picture .= $leftLine . "($fruit)" . $rightLine . '>';
echo $picture;