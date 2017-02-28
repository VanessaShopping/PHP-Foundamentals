<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Feb-17
 * Time: 11:23 AM
 */
include '../../MVC Framework/Source Files/App.php';

$app = \MVCFramework\App::getInstance(); // Namespace MVCFramework \ Class App \ Static Method getInstance

$config = \MVCFramework\Config::getInstance();
$config->setConfigFolder('../Config');


$app->run();