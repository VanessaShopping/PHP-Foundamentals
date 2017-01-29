<!--
 Created by PhpStorm.
 User: VanessaShopping
 Date: 25-Jan-17
 Time: 8:16 PM

html:5 tab -> shortcut
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Table</title>
</head>
<body>
<?php
$name = "Petar Petrov";
$phoneNumber = 123456;
$age = 26;
$adress = "Rousse";
?>

<style>
    body {
        background-color: aqua;
    }

    table {
        border-collapse: collapse;
        display: inline-block;
        margin-left: 50px;
        text-align: center;
    }

    th {
        border: 3px solid darkgray;
        color: darkviolet;
        width: 200px;
        background-color: darkorange;
    }

    td {
        border: 3px solid darkgray;
        height: 30px;
        width: 200px;
        color: darkviolet;
        background-color: orange;
    }


</style>

<table>
    <tr>
        <th>Name</th>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <th>Phone Number</th>
        <td><?php echo $phoneNumber ?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <th>Adress</th>
        <td><?php echo $adress ?></td>
    </tr>
</table>

<?php
$personInfo = [];
$personInfo['Name'] = $name;
$personInfo['Phone Number'] = $phoneNumber;
$personInfo['Age'] = $age;
$personInfo['Adress'] = $adress;
?>

<table>
    <?php foreach ($personInfo as $key => $value): ; ?>
        <tr>
            <th><?php echo $key; ?></th>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>


