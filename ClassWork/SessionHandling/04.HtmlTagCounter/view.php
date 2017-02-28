<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:27 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html Tag Counter</title>
</head>
<body>
<form action="">
    <div>
        <label for="tag">Enter HTML Tag:</label>
    </div>
    <input type="text" name="tag" title="tag" id="tag" required>
    <input type="submit" value="submit" name="submit">
</form>
<?php if (isset($score, $validity)): ; ?>
    <h1><?= $validity ? "Valid" : "Invalid" ?> HTML tag!</h1>
    <h1>Score: <?= $score ?></h1>
<?php endif; ?>
</body>
</html>
