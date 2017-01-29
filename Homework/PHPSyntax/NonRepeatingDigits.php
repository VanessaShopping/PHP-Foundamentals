<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Jan-17
 * Time: 8:15 PM
 */

$n = 45;
$num = NULL;

for ($a = 1; $a <= $n; $a++){
    if ($n<102){
        echo "no";
        break;
    }
    for ($b = 0; $b <= 9; $b++){
        for ($c = 0; $c <= 9; $c++){
            if ($a!=$b && $a!=$c && $b!=$c){
                $num = (int)$a.$b.$c;
                if ($num<=$n){
                    echo $num . "\n";
                }
                else{
                    break 3;
                }
            }
        }
    }
}