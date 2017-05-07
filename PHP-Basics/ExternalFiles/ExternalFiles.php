<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 10-Mar-17
 * Time: 7:32 PM
 */

include "a.php";
include_once "b.php";
// Разликата между include и include_once е, че когато използваме  include , можем да добавим файла няколко пъти.
// ако използваме include_once  и ако файла вече е бил добавн , то няма да се добави втори път
echo 'I\'m ExternalFiles.php' . '</br>';


//  Разликата между include и require  е ,че когато добавяме с include и има проблем с файла (липсва или сгрешено име)
// кода ще се опита да продължи с изпълнението си -> Warning
// Ако използваме require и има някакъв проблем с файла програмата ще спре -> Fatal Errro