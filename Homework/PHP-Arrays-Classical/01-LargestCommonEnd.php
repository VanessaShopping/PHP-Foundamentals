<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:47 PM
 */

$firstInput = trim(fgets(STDIN));
$secondInput = trim(fgets(STDIN));

$firstArray = explode(" ", $firstInput);
$secondArray = explode(" ", $secondInput);

$leftCount = 0;
$rightCount = 0;

$firstCount = count($firstArray);
$secondCount = count($secondArray);
$count = 0;
if ($firstCount >= $secondCount) {
    $count = $secondCount;
} else {
    $count = $firstCount;
}
// check from left to right
for ($i = 0; $i < $count; $i++) {
    if ($firstArray[$i] == $secondArray[$i]) {
        $leftCount++;
    } else {
        break;
    }
}

// check from right to left
$reverseFirstArray = array_reverse($firstArray);
$reverseSecondArray = array_reverse($secondArray);
for ($i = 0; $i < $count; $i++) {
    if ($reverseFirstArray[$i] == $reverseSecondArray[$i]) {
        $rightCount++;
    } else {
        break;
    }
}

if ($leftCount >= $rightCount) {
    echo $leftCount;
} else {
    echo $rightCount;
}

?>