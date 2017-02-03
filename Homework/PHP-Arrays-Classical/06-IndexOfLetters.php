<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:50 PM
 */

$str = strtolower(fgets(STDIN));
$arr = [];
$count = strlen($str);
for ($i = 0 ; $i< $count-2; $i++) {
    $ord = (ord($str[$i]) - 97);
    echo $str[$i]. ' -> ';
    echo $ord . "\n";
}