<!-- /**
* Created by PhpStorm.
* User: VanessaShopping
* Date: 28-Jan-17
* Time: 10:53 AM
*/ round(sqrt(96), 2); -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Square Root Sum</title>
</head>
<body>
<style>
    table {
        border-collapse: collapse;
        width: 300px;
        height: 30px;
    }

    table td {
        border: solid 3px red;
        border-collapse: collapse;
        color: darkcyan;
    }
</style>

<table>
    <tr>
        <td align="center">Number</td>
        <td align="center">Square</td>
    </tr>
    <?php
    $sum = 0.0;
    for ($i = 0; $i <= 100; $i += 2):
        $sqrtNum = sqrt($i);
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $roundSqrt = round($sqrtNum, 2);
                $sum += $sqrtNum ?></td>
        </tr>
        <?php

    endfor; ?>
    <tr>
        <td><b>Total:</b></td>
        <td><?php echo round($sum, 2) ?></td>
    </tr>
</table>
</body>
</html>

