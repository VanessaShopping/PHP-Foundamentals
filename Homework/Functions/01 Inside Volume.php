<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 09-Feb-17
 * Time: 8:53 PM
 */

$coordinates = trim(fgets(STDIN));
$coordinates = explode(", ", $coordinates);

$count = count($coordinates);

for ($i = 0; $i < $count; $i += 3) {
    $x = $coordinates[$i];
    $y = $coordinates[$i + 1];
    $z = $coordinates[$i + 2];
    if (insideVolume($x, $y, $z)) {
        echo 'inside' . "\n";
    }
    else{
        echo 'outside' . "\n";
    }
}

function insideVolume($x, $y, $z)
{
    $x1 = 10;
    $x2 = 50;
    $y1 = 20;
    $y2 = 80;
    $z1 = 15;
    $z2 = 50;
    if ($x >= $x1 && $x <= $x2) {
        if ($y >= $y1 && $z <= $y2) {
            if ($z >= $z1 && $z <= $z2) {
                return true;
            }
        }
    }
    return false;
}