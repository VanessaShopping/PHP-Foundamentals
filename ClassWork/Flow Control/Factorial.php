<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Jan-17
 * Time: 7:52 PM
 */
$n = 5;
$factorial = 1;

for ($i = 1; $i <= $n; $i++){
    $factorial *= $i;
}
echo  $factorial;