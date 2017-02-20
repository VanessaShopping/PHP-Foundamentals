<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 19-Feb-17
 * Time: 10:31 PM
 */
include "Call.php";

$obj = new Call();
$obj->someMethod('Pesho', 25);
echo $obj->someMethod;