<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 03-Feb-17
 * Time: 11:37 PM
 */
$categories = trim($_GET['categories']);;
$tags = trim($_GET['tags']);;
$months = trim($_GET['months']);;
$categories = explode(", ",$categories);
$tags = explode(", ",$tags);
$months = explode(", ",$months);
?>
<h2>Categories</h2><ul><?php foreach ($categories as $value): ?><li><?=$value?></li><?php endforeach; ?></ul><h2>Tags</h2><ul><?php foreach ($tags as $value): ?><li><?=$value?></li><?php endforeach; ?></ul><h2>Months</h2><ul><?php foreach ($months as $value): ?><li><?=$value?></li><?php endforeach; ?></ul>
