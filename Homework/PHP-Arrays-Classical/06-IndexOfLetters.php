<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:50 PM
 */

$inputText = trim(strtolower(fgets(STDIN)));
$count = strlen($inputText); // дължина на текста
for ($i = 0 ; $i< $count; $i++) {
    $ord = (ord($inputText[$i]) - 97); // ord -> Ordinal пореден. Return ASCII value of character
    echo $inputText[$i]. ' -> ';
    echo $ord . "\n";
}