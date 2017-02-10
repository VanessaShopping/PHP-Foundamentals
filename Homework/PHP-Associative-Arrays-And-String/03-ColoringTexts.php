<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 03-Feb-17
 * Time: 11:36 PM
 */
if (isset($_GET['input'])) {
    $text = trim($_GET['input']);

    $len = strlen($text);
    for ($i = 0; $i < $len; $i++) {
        if ($text[$i] != " ") {
            if (ord($text[$i]) % 2 == 0) {
                ?><font color='red'><?= $text[$i] ?> </font><?php } else {
                ?><font color='blue'><?= $text[$i] ?> </font><?php }
        }
    }
}