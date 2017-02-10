<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 03-Feb-17
 * Time: 11:36 PM
 */

$numbers = explode(" ", trim(fgets(STDIN)));
$numbers = array_count_values($numbers);
ksort($numbers);
foreach ($numbers as $key => $value){
    echo "$key -> $value times" . "\n";
}