<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Jan-17
 * Time: 11:46 PM
 */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum of digits</title>
</head>
<body>
<style>
    table, tr, td {
        border: 3px solid red;
        width: 400px;
    }

    td {
        text-align: center;
    }
</style>

<form action="" method="GET">
    <lable>Input string:</lable>
    <input type="text" name="inputText" id="inputText">
    <input type="submit" name="submit" id="submit">
</form>
</br>
<?php

if (isset($_GET['inputText'])) {
    $words = trim($_GET['inputText']);
    $words = array_map('trim', array_filter(explode(',', $words)));
    ?>
    <table>
        <tr>
            <td>Number</td>
            <td>Sum of Digits</td>
        </tr>
        <?php

        foreach ($words as $word) {
            if (is_numeric($word)) {
                ?>
                <tr>
                    <td><?= $word ?></td>

                    <?php
                    $sumOfDigits = 0;
                    $num = intval(trim($_GET['inputText']));
                    $lenghtNum = strlen($word);
                    for ($i = 0; $i < $lenghtNum; $i++) {
                        $sumOfDigits += $word[$i];
                    } ?>
                    <td><?= $sumOfDigits ?></td>
                </tr>
                <?php
            } else {
                ?>
                <tr>
                    <td><?= $word ?></td>
                    <td><?= 'I cannot sum that' ?></td>
                </tr>
                <?php
            }
        }

        ?>
    </table>
    <?php

} ?>

</body>
</html>