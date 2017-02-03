<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:48 PM
 */

$numsArray = array_map('trim', explode(' ', fgets(STDIN)));
$numberOfIndices = count($numsArray);
$counter = 1;
$max=0;
$num=0;
for ($i=0; $i< $numberOfIndices; $i++) {
    if ($i == $numberOfIndices-1) {
        break;
    } else {
        if ($numsArray[$i] == $numsArray[$i + 1]) {
            $counter++;
            if ($max < $counter) {
                $max = $counter;
                $num = $numsArray[$i];
            }
        }
        else {
            $counter = 1;
        };
    }
}
if ($counter == 1) {
    echo $numsArray[0];
}
for ($i = 0 ; $i< $max; $i++) {
    echo $num . ' ';
}