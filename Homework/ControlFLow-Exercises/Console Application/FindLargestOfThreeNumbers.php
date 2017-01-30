<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 2:40 PM
 */
$firstNumber = intval(fgets(STDIN));
$secondNumber = intval(fgets(STDIN));
$thirdNumber = intval(fgets(STDIN));
echo max($firstNumber, $secondNumber, $thirdNumber);