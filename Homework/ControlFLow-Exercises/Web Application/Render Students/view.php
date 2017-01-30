<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 3:52 PM
 */
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <scrypt src></scrypt>
    <title>Render Students</title>
    <style>
        table, td, th {
            border: 1px solid black;
            width: 300px;
        }

        td {

            color: darkslategrey;
        }
    </style>
</head>
<body>

<form action="" method="get">
    <div>
        <label for="delimiter">Delimiter: </label>
        <select name="delimiter" id="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&amp;">&amp;</option>
        </select>
    </div>
    </br>
    <div>
        <label for="names">Names: </label>
        <input type="text" id="names" name="names" required>
    </div>
    </br>
    <div>
        <label for="ages">Ages: </label>
        <input type="text" id="ages" name="ages" required>
    </div>
    </br>
    <div>
        <button>Filter!</button>
    </div>
</form>


<?php if (isset($students)) : ; ?>
    <hr>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student) : ; ?>
            <tr>
                <td><?= $student->name ?></td>
                <td><?= $student->age ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>


</body>
</html>