<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 16-Feb-17
 * Time: 11:15 AM
 */
include_once 'Person.php';

$person = new Person('pesho', 25);
echo(count(get_object_vars($person)));