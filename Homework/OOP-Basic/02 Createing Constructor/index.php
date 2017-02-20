<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 16-Feb-17
 * Time: 11:22 AM
 */
include_once 'CreatingConstructor.php';
$name = trim(fgets(STDIN));
$age = intval(fgets(STDIN));
$person = new CreatingConstructor($name, $age);

echo $person;
