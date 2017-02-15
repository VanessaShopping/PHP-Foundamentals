<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 5:20 PM
 */
include_once 'Animal.php';
include_once 'Human.php';

$animal = new Animal();
$animal->goToEat();
$animal->goToSleep();

$human = new Human();
$human->driveCar();
$human->goToEat();
$human->goToSleep();



