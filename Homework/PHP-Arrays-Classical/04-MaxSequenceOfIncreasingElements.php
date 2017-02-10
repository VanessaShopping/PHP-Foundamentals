<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:48 PM
 */

$nums = array_map('trim', explode(' ', fgets(STDIN)));
$count_arr = count($nums);
$counter = 1;
$max=0;
$end = 0;
//Проверка ако елементите на масива са само 1 отпечатва и край;
if ($count_arr == 1) {
    echo $nums[0];
    exit;
}
// ако са повече влиза в цикъла
for ($i=0; $i< $count_arr; $i++) {
// ако елемента е последен прави проверка, дали последния елемент е по-голям от предходния
// ако е по-голямо каунтъра се увеличава с едно
    if ($i == $count_arr - 1) {
        if ($nums[$i-1] < $nums[$i]) {
            if ($max < $counter) {
                $max = $counter;
                echo $max;
                $end = $i;
                break;
            } else {
                break;
            }
        }
        // Ако не е последен емент се прави проверка дали следващия елемент в масива е по-голям ако да
        // каунтъра се увеличава с едно и се прави проверка дали максималната стойност е по-малка от каунтъра ....
    } else {
        if ($nums[$i] < $nums[$i + 1]) {
            $counter++;
            if ($max < $counter) {
                $max = $counter;
                $end = $i+1;
            }
        } else {
            $counter = 1;
        }
    }
}
// намираме на чалния индекс и въртим цикъла от начало до края
// 0 1 2 3 4 5 indices
// 5 3 7 8 9 1 values
//     7 8 9 - max length of increasing elements
// start = 4 - 2 = 2
// i = 2 докато i <= 4 Цикъла си върти от индекса на първия елемент
$start = $end-($max-1);
for ($i=$start; $i<=$end; $i++) {
    echo $nums[$i]. ' '; // принтираме числата които стоят на индексите в зададения диапазон
}