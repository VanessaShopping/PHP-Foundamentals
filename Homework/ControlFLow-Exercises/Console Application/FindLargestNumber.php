<?php
/**
 * Created by PhtpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 2:44 PM
 */
$numbers = [];
while (true) {
    $line = trim(fgets(STDIN));
    if (empty($line))
        break;
    if (is_numeric($line))
        array_push($numbers, intval($line));
}
echo max($numbers);