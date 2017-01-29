<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Jan-17
 * Time: 8:16 PM
 */-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
</head>
<body>
<form action="" method="get">
    Име: <input type="text" name="firstName">
    Години: <input type="number" name="age"></br></br>
    <input type="radio" name="gender" value="мъжки" checked> Мъж
    <input type="radio" name="gender" value="женски"> Жена </br></br>
    <input type="submit" name="submit" value="Изпрати">
</form></br>

<?php
if (isset($_GET['submit'])) {
    if (!$_GET['firstName'] || !$_GET['age']) {
        echo 'Не са попълнени всички полета';
    } else {
        $name = $_GET['firstName'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        echo "Моето име е {$name}. Аз съм на {$age} години. Аз съм от {$gender} пол.";
    }
}
?>
</body>
</html>