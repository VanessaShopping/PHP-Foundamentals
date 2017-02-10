<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:51 PM
 */

$seq = array_map('trim', explode(" ", fgets(STDIN)));
$indices = count($seq);
$len = [];
$prev = [];
$maxLen = 0;
$lastIndex = 0;
for ($i = 0; $i < $indices; $i++) {
    if ($indices == 1){
        echo $seq[0];
        break;
    }
    $len[$i] = 1;
    $prev[$i] = -1;
    for ($x = 0; $x < $i; $x++) {
        if (($seq[$x] < $seq[$i]) && ($len[$x] + 1 > $len[$i])) {
            $len[$i] = $len[$x] + 1;
            $prev[$i] = $x;
        }
        if ($len[$i] > $maxLen) {
            $maxLen = $len[$i];
            $lastIndex = $i;
        }
    }
}

$lis = []; // Longest Increasing Subsequence

while ($lastIndex != -1) {
    $lis[] = $prev[$lastIndex];
    $lastIndex = $prev[$lastIndex];
}
array_reverse($lis);
echo join(" ", $lis);