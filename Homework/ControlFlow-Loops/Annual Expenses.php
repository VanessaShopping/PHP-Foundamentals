<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Jan-17
 * Time: 8:49 PM
 */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annual Exprenses</title>
</head>
<body>
<style>
    table, th, td {
        border: 3px solid red;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<form action="" method="get">
    <lable>Enter number of years:</lable>
    <input type="number" name="years" id="years" required>
    <input type="submit" name="submit" id="submit">
</form>
</br>
<?php
if (isset($_GET['years']) && is_numeric($_GET['years'])) {
    $years = intval(trim($_GET['years']));
$currentYear = date('Y');
?>
<table width="100%">
    <thead>
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>Total:</th>
    </thead>
    </tr>
    <tr>
        <?php
        for ($y = 1;
        $y <= $years;
        $y++) {
        $sumExpenses = 0;
        ?>
        <td><?= $currentYear ?></td>
        <?php
        $currentYear--;
        for ($i = 1; $i <= 12; $i++) {
            $randExpenses = rand(1, 999);
            $sumExpenses += $randExpenses;
            ?>
            <td><?= $randExpenses ?></td>
            <?php
        }
        ?>
        <td><?= $sumExpenses ?></td>
    </tr>
    <?php }
    } ?>

</table>


</body>
</html>