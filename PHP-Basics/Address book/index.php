<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 13-Mar-17
 * Time: 12:40 PM
 */
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<?php
if ($_SESSION['is_logged'] == true) {
    //TODO list of friends
    echo '<a href="logout.php">Logout</a>';
} else {
    if ($_GET['error'] == 1){
        echo 'Wrong password';
    }
    ?>
    <form method="POST" action="login.php">
        <lable>Username:</lable>
        <input type="text" name="login" id="username">
        <lable>Password:</lable>
        <input type="password" name="pass" id="pass">
        <input type="submit" name="submit" id="submit" value="Login">
    </form>
    <?php
}
?>
</body>
</html>
