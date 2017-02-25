<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 10:52 AM
 */

include "singleton.php";

$newObj = Singleton::getInstance();
var_dump($newObj);

$secondObj = Singleton::getInstance();
var_dump($newObj);
var_dump($secondObj);

$thirdObj = Singleton::getInstance();
var_dump($newObj);
var_dump($secondObj);
var_dump($thirdObj);


// Ако нямаме проверка , при второ ,трето и повече инцтанции, всички статични методи и свойства на класа ще приемат параметрите от
// последната инстанция
// Инстанцията ще бъде само една // последно направената