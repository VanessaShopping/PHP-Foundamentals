<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 05-Mar-17
 * Time: 7:00 PM
 */
include "register_frontend.php";

$username = 'root';
$password = '';
$host = 'localhost';
$db = 'testdb';

$connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8;", $username, $password);


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $country = $_POST['country'];
    $city = $_POST['city'];

    $register = $connection->query("INSERT INTO `testdb`.`users` (`username`, `country_id`, `city_id`) 
                                      VALUES ('$username', '$country', '$city')");
}

