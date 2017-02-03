<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:47 PM
 */
$arrayInput = trim(fgets(STDIN)); // Четем първи ред от конзолата , който е стринг
$rotateInput = trim(fgets(STDIN)); // Четем втори ред от конзолата , който е стринг


$array = explode(" ", $arrayInput); // Първия ред го разделяме по интервали и го правим от стринг на масив
$numberOfRotate = intval($rotateInput); // Втория ред го записваме в променлива и го променяме от стринг в инт
$arrayCount = count($array);
$sumArray = [];

$a = count($array) - 1;
$b = 0;

// rotate array and sum
for ($r = 0; $r < $numberOfRotate; $r++) { // правим цикъл колко пъти ще завъртим масива
    // тук трябва да завъртим масива. Последата стойност става първа, първата->втора etc.
    moveElement($array, $a, $b);
    for ($i = 0; $i < $arrayCount; $i++) {
        $sumArray[$i] += $array[$i];
    }
}
function moveElement(&$array, $a, $b)
{
    $out = array_splice($array, $a, 1); // Премахнатия елемент/и го/ги записваме в променливата $out
    array_splice($array, $b, 0, $out); // от индекс $b , 0 елемента , слагаме премахнатата променлива $out
}

echo join(' ', $sumArray);