<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 12-Feb-17
 * Time: 10:19 AM
 */
$number = trim(fgets(STDIN));
// 554 = 14 /3 = 4.... --> 5549 = 23 / 4 = 5...
function getAverage($num)
{
    $sumDigits = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $sumDigits += $num[$i];
    }
    $average = $sumDigits / strlen($num);
    return $average;
}


$averageNum = getAverage($number);

while ($averageNum <5){
    $number .= '9';
    $averageNum = getAverage($number);
}
echo $number;