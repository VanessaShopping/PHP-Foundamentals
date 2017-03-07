<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 05-Mar-17
 * Time: 8:01 PM
 */


$username = 'root';
$password = '';
$host = 'localhost';
$db = 'testdb';

$connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8;", $username, $password);

$test = $connection->query("SELECT * FROM `users`");
var_dump($test->fetchAll(PDO::FETCH_ASSOC));