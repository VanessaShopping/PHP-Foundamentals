<!--/**
* Created by PhpStorm.
* User: VanessaShopping
* Date: 28-Jan-17
* Time: 9:55 PM
*/-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primes in range</title>
</head>
<body>
<form action="" method="get">
    <lable>Starting index:</lable>
    <input type="number" name="startIndex" id="startIndex">
    <lable>End:</lable>
    <input type="number" name="endIndex" id="endIndex">
    <input type="submit" name="sumbit" id="submit"> </br>
    <?php
    function isPrime($i)
    {
        for ($p = 2; $p <= sqrt($i); $p++) {
            if ($i % $p == 0) {
                return false;
            }
        }
        return true;
    }
    if (isset($_GET['startIndex']) && is_numeric($_GET['startIndex']) && $_GET['endIndex'] && is_numeric($_GET['endIndex'])) {
        $start = intval(trim($_GET['startIndex']));
        $end = intval(trim($_GET['endIndex']));
        $print = '';
        for ($i = $start; $i <= $end; $i++) {
            if ($i > 1 && isPrime($i)) {
                $print .= "<b>{$i}</b>, ";
            } else {
                $print .= "{$i}, ";
            }
        }

        $print = rtrim($print, ', ');
echo $print;
    } ?>
</form>
</body>
</html>