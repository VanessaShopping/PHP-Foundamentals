<?php
/**
 * Created by PhpStorm.
 * Author: VanessaShopping
 * Date: 12-Feb-17
 * Time: 3:14 PM
 */
spl_autoload_register(function ($class) {
    $class = $class . '.php';
    require_once $class;
});

$forum = new Forum();
$forum->start();