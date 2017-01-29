<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Jan-17
 * Time: 8:16 PM
 */


// $currentDate = date("jS F, Y"); // 25th January, 2017
// $days = date("t"); // days in current month --> 31days



$sundaysInCurrentMonth = array();
$type = CAL_GREGORIAN;
$month = date('n'); // Number of current Month --> 1
$year = date('Y'); // Current year --> 2017
$day_count = cal_days_in_month($type, $month, $year); // Get the amount of days --> 31days

//loop all days
for ($i = 1; $i <= $day_count; $i++) {

    $date = $year.'/'.$month.'/'.$i; //format date
    $get_name = date('l', strtotime($date)); //get week day --> Sunday Monday Tuesday Wednesday etc.
    $day_name = substr($get_name, 0, 3); // Trim day name to 3 chars --> Sunday = Sun etc.

    //Add sundays in array
    if($day_name == 'Sun'){
        $sundaysInCurrentMonth[] = $i;
        $printDate = new DateTime("$year-$month-$i");
        echo $printDate->format('jS F, Y');
        echo "</br>";
    }

}
// print_r($sundaysInCurrentMonth);