<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 13-Mar-17
 * Time: 11:50 AM
 */

$a[3]= 'A';
$a[1]= 'B';
$a[2]= 'C';
$a[4]= 'D';


echo count($a) . '<br>'; // Размера на масив

if (is_array($a)){
    echo '$a is array' . '<br>';
}

// Има 4 начина за сортиране . По ключ . По стойност. Низходящо . Възходящо
ksort($a); // Сортиране по клчю
krsort($a); // Сортиране по клчю в обратен ред.
sort($a); // Сортиране по стойност. Губи се връзката между ключовете.
rsort($a); // Сортиране по стойност в обратен ред
asort($a); // Сортира по стойност, и запазва ключовете

// За многомерни масиви функциите не винаги работят правилно
// Ползва се array_multisort



if (array_key_exists(3, $a)){
    echo 'Key is found' . '<br>';
}else{
    echo 'Key is not found' . '<br>';
}


$b[0] = 'F';
$b[3] = 'C';

if (array_search('F', $b) !== false){ // Търсене на стойност в масив // Връща клюа на стойноста. В случея ще върне 0 която ще стане False
    echo 'Value is found' . '<br>';
}else{
    echo 'Value is not found' . '<br>';
}

// === сравнява по стойност и по тип
// 0 == false => true
// 0 === false => false

