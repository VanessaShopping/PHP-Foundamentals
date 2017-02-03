<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 01-Feb-17
 * Time: 9:31 PM
 */
$arr = ['q ', 'w ', 'e ', 'r ', 't ', 'y ',];

unset($arr[3]); // remove index 3 == 'r';  index = 0 1 2 4 5
$arr[3] = 'A '; // add index 3 == 'new'    index = 0 1 2 4 5 3

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
}
// print_r(array_keys($arr));
echo "\n";
foreach ($arr as $v){
    echo $v . " ";
}
ksort($arr);
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
}
// print_r(array_keys($arr));