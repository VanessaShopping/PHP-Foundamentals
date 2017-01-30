<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 3:35 PM
 */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate two numbers</title>
</head>
<body>

<?php
if (isset($_GET['numA']) && !empty(trim($_GET['numA'])) &&
    isset($_GET['numB']) && !empty(trim($_GET['numB'])) &&
    isset($_GET['operation'])
) {
    if (is_numeric(trim($_GET['numA'])) && is_numeric(trim($_GET['numB']))) {
        $operation = trim($_GET['operation']);
        $numA = intval(trim($_GET['numA']));
        $numB = intval(trim($_GET['numB']));
        $result = 0;
        switch ($operation) {
            case 'sum':
                $result = $numA + $numB;
                break;
            case 'subtract':
                $result = $numA - $numB;
                break;
            default:
                echo 'Wrong operation supplied!';
                break;
        }
    }
}
?>
<form action="" method="get">
    <div>
        <label for="operation">Operation</label>
        <select name="operation" id="operation" title="Operation" required>
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    </br>
    <div>
        <label for="numA">Number 1:</label>
        <input type="number" name="numA" id="numA" required>
    </div>
    </br>
    <div>
        <label for="numB">Number 2:</label>
        <input type="number" name="numB" id="numB" required>
    </div>
    </br>
    <div>
        <button>Calculate</button>
    </div> </br>
    <?php if (isset($result)) : ; ?>
        <div>
            <label for="result">Result:</label>
            <input type="text" id="result" disabled value="<?= $result ?>">
        </div>
    <?php endif; ?>
</form>


</body>
</html>