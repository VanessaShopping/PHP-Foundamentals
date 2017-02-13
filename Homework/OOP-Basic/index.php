<?php
include_once('Person.php');
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 13-Feb-17
 * Time: 8:07 PM
 */
$person = new Person();
echo count(get_object_vars($person));
$person->setAge(25);
$person->setName('Pesho');
var_dump($person);