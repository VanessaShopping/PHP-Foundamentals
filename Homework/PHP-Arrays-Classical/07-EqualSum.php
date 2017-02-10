<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:50 PM
 */

$nums = array_map('trim', explode(' ', fgets(STDIN)));
$count = count($nums);
$leftSum = 0;
$rightSum = 0;
$is_found = false;
$found=0;
if ($count == 1) {
    echo 0;
} else {
    for ($i = 0; $i < $count; $i++) {
        $leftSum += $nums[$i];
        $rightSum =0;
        for ($j = $count - 1; $j > $i+1; $j--) {
            $rightSum += $nums[$j];
            if ($leftSum == $rightSum) {
                $found = $i + 1;
                $is_found = true;
            }
        }
    }
    if ($is_found == false) {
        echo 'no';
    } else {
        echo $found;
    }
}