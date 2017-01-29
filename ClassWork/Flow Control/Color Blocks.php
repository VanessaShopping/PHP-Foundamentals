<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Jan-17
 * Time: 8:04 PM
 */

for ($r = 32, $g = 32, $b = 32;
     $r < 256;
     $r += 8, $g += 2, $b += 8) :
    $color = "#" .
        str_pad(dechex($r), 2, 0) .
        str_pad(dechex($g), 2, 0) .
        str_pad(dechex($b), 2, 0);
    ?>

    <div style="width:400px; background-color: <?= $color ?>">
        <?= $color ?>
    </div>
<?php endfor; ?>