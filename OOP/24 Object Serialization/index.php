<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Feb-17
 * Time: 3:40 PM
 */
include "User.php";

// Сериализацията е процес когато хваща обект и го превръща в стринг.
// Десериализация е процес когато стринг превръщаме в обект. Стринга

$user1 = new User();
$user1->setAge(25);
$user1->setName('Pesho');

$serializeUser = serialize($user1);     // => O:4:"User":2:{s:10:"Username";s:5:"Pesho";s:9:"Userage";i:25;}
echo $serializeUser;

$user1 = unserialize($serializeUser); // тук превръщаме горния стринг в обект
var_dump($user1);
$user1->setName('Georgi');
$user1->setAge(13);
var_dump($user1);

// Не можем да десериализираме стринг-а ако нямаме изходния код, т.е. трябва да сме инклуднали класа.