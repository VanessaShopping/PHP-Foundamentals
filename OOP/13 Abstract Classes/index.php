<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:48 PM
 */
include "MyPlugin.php";

/*$someObj = new AbstractPlugin();*/
// Абстрактните класове не могат да бъдат дирекнто инстанцирани
// Абстрактния клас трябва да бъде НАСЛЕДЕН

$plugin = new MyPlugin();
$plugin->play();
$plugin->getInfo();