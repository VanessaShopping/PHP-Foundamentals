<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 11:11 PM
 */
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<form action="" method="post">
    Name: <input type="text" name="id" id=""/> </br>
    Telephone: <input type="tel" name="tel" id=""/> </br>
    Email: <input type="email" name="email" id=""/> </br>
    Password: <input type="password" name="pass" id=""/> </br>
    Date: <input type="date" name="Date" id=""/> </br>
    DateTime: <input type="datetime" name="DateTime" id=""/> </br>
    DateTime-Local: <input type="datetime-local" name="DT-local" id=""/> </br>
    Week: <input type="week" name="week" id=""/> </br>
    Month: <input type="month" name="Month" id=""/> </br>
    File: <input type="file" name="FIle" id=""/> </br>
    Image: <input type="image"
                  src="https://3.bp.blogspot.com/-JhISDA9aj1Q/UTECr1GzirI/AAAAAAAAC2o/5qmvWZiCMRQ/s1600/Twitter.png"
                  name="img" id=""/> </br>
    Range: <input type="range" name="range" value="15" id=""/> </br>
    Chechbox: <input type="checkbox" name="Checbx" id=""/> </br>
    Number: <input type="number" name="Num" id=""/> </br>
    Search: <input type="search" name="Srch" id=""/> </br>
    Radio: <input type="radio" name="RadioB" id=""/> </br>
    Color: <input type="color" name="Color" id=""/> </br>
    URL: <input type="url" name="Url" id=""/> </br>

    Hidden: <input type="hidden" name="hidden" id=""/> </br>


    Button: <input type="button" name="button" id="" value="Button4e"/> </br>
    Reset: <input type="reset" name="reset" id=""/> </br>
    Submit: <input type="submit" name="submit" id=""/> </br>
</form>
<?php
echo 'Get =>';
var_dump($_GET);
echo "\n";
echo 'Post =>';
var_dump($_POST);
echo "\n";
echo 'Request =>';
var_dump($_REQUEST);
?>
</body>
</html>