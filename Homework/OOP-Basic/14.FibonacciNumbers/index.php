<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 10:18 AM
 */

require_once "Fibonacci.php";
$start = intval(trim(fgets(STDIN)));
$end = intval(trim(fgets(STDIN)));
$fib = new Fibonacci($end);
echo implode(", ", $fib->getFibonacciRange($start, $end));