<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:23 AM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Most Frequent Tag</title>
</head>
<body>
<form action="">
    <div>
        <label for="tags">Enter Tags:</label>
    </div>
    <input type="text" name="tags" title="tags" id="tags">
    <input type="submit" value="submit" name="submit">
    <input type="submit" value="clear" name="clear">
</form>
<?php if (isset($allTags, $mostFrequentTag)): ; ?>
    <?php foreach ($allTags as $tag => $count) : ; ?>
        <div><?= $tag ?> : <?= $count ?> times</div>
    <?php endforeach; ?>
    <div>Most frequent tag is: <?= $mostFrequentTag ?></div>
<?php endif; ?>
</body>
</html>
