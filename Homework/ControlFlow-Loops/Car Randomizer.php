<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Randomizer</title>
</head>
<body>
<style>
    table, th, td {
        border: 3px solid red;
        border-collapse: collapse;
        width: 400px;
    }

    td {
        text-align: center;
    }
</style>

<form action="" method="GET">
    <lable>Enter cars:</lable>
    <input type="text" name="cars" id="cars" required>
    <input type="submit" value="Show Result">
</form>
</br>

<?php
// $cars = array("Volvo", "BMW", "Toyota");
if (isset($_GET['cars'])) {
$cars = trim($_GET['cars']);
$cars = array_map('trim', array_filter(explode(',', $cars)));
?>
<table>
    <thead>
    <tr>
        <th>Car</th>
        <th>Color</th>
        <th>Count</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($cars as $car):
        $count = rand(1, 5);
        $colors = RandomColor();
        ?>
        <tr>
            <td><?= $car ?></td>
            <td><?= $colors ?></td>
            <td><?= $count ?></td>
        </tr>
    <?php endforeach;
    }
    function RandomColor()
    {
        $colors = ['red', 'green', 'blue'];
        return $colors[rand(0, sizeof($colors) - 1)];
    }

    ?>
    </tbody>

</body>
</html>