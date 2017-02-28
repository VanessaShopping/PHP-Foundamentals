<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 10:16 AM
 */
require_once 'DecimalNumber.php';
$decimal = new DecimalNumber(trim(fgets(STDIN)));
var_dump($decimal->getNumberReversed());