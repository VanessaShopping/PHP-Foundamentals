<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 10-Mar-17
 * Time: 7:54 PM
 */-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<form action="form.php" method="post">
    <input type="text" name="username" id="username">
    <input type="submit" name="submit" id="submit" value="Button4e">
</form>

</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    echo '<pre>' . $username . '</pre>';
}

/*
if (isset($_GET['submit'])) {
    $username = $_GET['username'];
    echo '<pre>' . $username . '</pre>';
}*/


// POST ->  Полетата се предават през header-a
// GET -> Полетата се предават през URL адреса
// REQUEST ->