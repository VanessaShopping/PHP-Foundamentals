<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 10:15 AM
 */

require_once 'Number.php';
$number = new Number(intval(fgets(STDIN)));
echo $number->getLastDigitName();