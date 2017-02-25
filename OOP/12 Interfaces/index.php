<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 7:57 PM
 */

include "Interfaces.php";

$p = new Interfaces();
$p->play("Some stream");
$p->stop();
$p->pause();