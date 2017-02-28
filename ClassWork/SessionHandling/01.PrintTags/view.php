<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:22 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Tags</title>
</head>
<body>
<form action="">
    <div>
        <label for="tags">Enter Tags:</label>
    </div>
    <input type="text" name="tags" title="tags" id="tags">
    <input type="submit" value="Submit tags" name="submit">
</form>
<?php if (isset($tags) && count($tags) > 0): ?>
    <?php /** @var $tags string[] */; ?>
    <?php foreach ($tags as $i => $tag) : ; ?>
        <div><?php echo $i; ?> : <?php echo $tag; ?></div>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>