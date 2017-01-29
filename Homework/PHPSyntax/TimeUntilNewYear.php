<!--/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Jan-17
 * Time: 8:16 PM
 */-->
<?php
$today = getdate();
$lastday = mktime(1,0, 0, 1,1, date('y')+1);
$diff = $lastday - $today[0];

if (date("I", $today[0]) > 0) {
    $diff -= 60* 60;
}
echo 'Часове до нова година : '. round($diff/(60*60)) . '<br>' ;
echo 'Минути до нова година : ' . round($diff/60) . '<br>';
echo  'Секунди до нова година : ' . round($diff) . '<br>';
echo "Дни:Часове:Минути:Секунди : " . round($diff / (60*60*24)) . ":" . date("H:i:s", $today[0]);