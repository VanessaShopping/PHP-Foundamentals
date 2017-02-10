<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 03-Feb-17
 * Time: 11:37 PM
 */
$text = trim(fgets(STDIN));
$word = trim(fgets(STDIN));


// Раздели текста на изречениея.
// Ако това изречение завършва на . ! ? го запиши в $sentence
// Провери дали думата $word дали я има в изречението. Ако я има принтирай изречението.
$pattern = ['.','!','?']; // Ако завършва на . ! ?
$sentences = preg_split($pattern, $text);

/*foreach ($sentences as $sentence){
    if ($word я има в изречението){
        echo $sentence . "\n";
    }
}*/