<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 13-Mar-17
 * Time: 3:22 PM
 */
session_start();
$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
if (strlen($login) > 3 && strlen($pass) > 3) {
    if ($login == 'admin' && $pass = 'softtech') {
        $_SESSION['is_logged'] = true;
        echo $_SESSION['is_logged'];
        header('Location: index.php');
    } else {
        header('Location: index.php?error=1');
    }
}