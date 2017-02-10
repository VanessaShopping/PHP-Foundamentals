<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 03-Feb-17
 * Time: 11:37 PM
 */

$text = trim(fgets(STDIN));
$banned = trim(fgets(STDIN));
$banned = explode(", ", $banned);


foreach ($banned as $value) {
    $replaced = str_repeat("*", strlen($value));  // В $replaced Запиши стринг който да се състои от "*" и тези звездични
    // да са равни на дължината на текущата дума от масива $banned
    $text = str_replace($value, $replaced, $text); // $value = Замени, $replaced = СЪС, $text = в текста
    // Намери всички думи "$VALUE" в текста "$ТЕЖТ" и ги замени със "$REPLACED"
}
echo $text;