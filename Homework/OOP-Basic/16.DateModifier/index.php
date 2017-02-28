<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 10:20 AM
 */

require_once 'DateModifier.php';
$dateA = trim(fgets(STDIN));
$dateB = trim(fgets(STDIN));
echo DateModifier::getDateDifference($dateA, $dateB);