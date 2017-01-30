<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 2:54 PM
 */

$letters = [];
$word = trim(fgets(STDIN));
// str_split прави Думата на масив от чарове
foreach (str_split($word) as $ch) { //Сплитваме думата и за всяка буква проверяваме
    if (!array_key_exists($ch, $letters)) //Aко Ключа $ch не съществува в масива $letters
        $letters[$ch] = 0; // Стойноста на буквата я зануляваме
    $letters[$ch]++; // И след това я увеличаваме с 1
    // По този начин масива $letters става асоциативен масив
    // като стойна е бройката на всяка буквата от думата
}


arsort($letters); // сортира стойностите , като почне от най-големата. asort() започва от най-малкия
// ksort($letters); // сортира от low to hight ключовете в масива. krsort от hight to low.

foreach ($letters as $ch => $countLetter) {
    echo "{$ch} -> {$countLetter}\n";
}