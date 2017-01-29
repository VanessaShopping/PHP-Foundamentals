<?php
$num = 5.33;
$rem = fmod($num, 2);

if ($rem == 0) {
    echo "even";
} else if ($rem == round($rem)) {
    echo "odd";
} else {
    echo "invalid";
}
echo '</br>';

echo "5.99 % 2 =  ";
echo 5.99 % 2 . "</br>";
echo "4.99 % 2 =  ";
echo 4.99 % 2 . "</br>";

echo "fmode --> 5.99 % 2 =  ";
echo fmod(5.99,2) . "</br>";
echo "fmode --> 4.99 % 2 =  ";
echo fmod(4.99,2) . "</br>";

echo "round fmode(1.99) </br>";
echo round(1.99) . "</br>";
echo "round fmode(1.5) </br>";
echo round(1.5) . "</br>";
echo "round fmode(1.0001) </br>";
echo round(1.0001) . "</br>";