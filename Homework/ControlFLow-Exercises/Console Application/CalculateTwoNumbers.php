<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 2:04 PM
 */
$operation = $argv[1];
$numA = intval(fgets(STDIN));
$numB = intval(fgets(STDIN));
switch ($operation) {
    case 'sum':
        echo $numA + $numB;
        break;
    case 'subtract':
        echo $numA - $numB;
        break;
    default:
        echo 'Wrong operation supplied!';
        break;
}