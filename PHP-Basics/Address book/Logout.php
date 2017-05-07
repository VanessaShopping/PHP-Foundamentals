<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 13-Mar-17
 * Time: 2:05 PM
 */
session_start();

session_destroy();
header('Location: index.php');