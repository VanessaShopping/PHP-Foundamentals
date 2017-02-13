<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 12-Feb-17
 * Time: 10:40 AM
 */
$input = trim(fgets(STDIN));
$coordinates = explode(', ', $input);

function Location($x, $y)
{
    $tuvaluX1 = 1;
    $tuvaluX2 = 3;
    $tuvaluY1 = 1;
    $tuvaluY2 = 3;

    $tongaX1 = 0;
    $tongaX2 = 2;
    $tongaY1 = 6;
    $tongaY2 = 8;

    $samoaX1 = 5;
    $samoaX2 = 7;
    $samoaY1 = 3;
    $samoaY2 = 6;

    $cookX1 = 4;
    $cookX2 = 9;
    $cookY1 = 7;
    $cookY2 = 8;

    $tokelauX1 = 8;
    $tokelauX2 = 9;
    $tokelauY1 = 0;
    $tokelauY2 = 1;
    if ($x >= $tuvaluX1 && $x <= $tuvaluX2 && $y >= $tuvaluY1 && $y <= $tuvaluY2) {
        return 'Tuvalu';
    } else if ($x >= $tongaX1 && $x <= $tongaX2 && $y >= $tongaY1 && $y <= $tongaY2) {
        return 'Tonga';
    } else if ($x >= $samoaX1 && $x <= $samoaX2 && $y >= $samoaY1 && $y <= $samoaY2) {
        return 'Samoa';
    } else if ($x >= $cookX1 && $x <= $cookX2 && $y >= $cookY1 && $y <= $cookY2) {
        return 'Cook';
    } else if ($x >= $tokelauX1 && $x <= $tokelauX2 && $y >= $tokelauY1 && $y <= $tokelauY2) {
        return 'Tokelau';
    } else {
        return 'On the bottom of the ocean';
    }
}

for ($i = 0; $i < count($coordinates); $i += 2) {
    $x = $coordinates[$i];
    $y = $coordinates[$i + 1];
    echo Location($x, $y) . "\n";
}