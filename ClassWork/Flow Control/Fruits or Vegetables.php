<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Jan-17
 * Time: 6:52 PM
 */

$word = $argv[1];
switch ($word) {
    case 'banana':
    case 'apple':
    case 'kiwi':
    case 'cherry':
    case 'lemon':
    case 'grapes':
    case 'peach':
        echo "fruit";
        break;
    case 'tomato':
    case 'cucumber':
    case 'pepper':
    case 'onion':
    case 'parsley':
    case 'garlic':
        echo "vegetable";
        break;
    default:
        echo "unknown";
}