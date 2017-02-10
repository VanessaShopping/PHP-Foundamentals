<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 01-Feb-17
 * Time: 9:31 PM
 */
$arr1 = [5,4,7];
var_dump($arr1);
$arr2 = $arr1;
$arr1 = [];
var_dump($arr1);

$arr1[] = 99;
var_dump($arr1);