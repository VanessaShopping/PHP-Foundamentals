<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Feb-17
 * Time: 11:23 AM
 */
error_reporting(E_ALL ^ E_NOTICE);

include '../../MVC Framework/Source Files/App.php';

$app = \MVCFramework\App::getInstance(); // Namespace MVCFramework \ Class App \ Static Method getInstance

$config = \MVCFramework\Config::getInstance();
$config->setConfigFolder('../Config');

echo $config->app['test'] . "</br>";
echo $config->db['name'] . "</br>";

echo $app->getConfig()->app; // Нищо не връща.... ????


$app->run();