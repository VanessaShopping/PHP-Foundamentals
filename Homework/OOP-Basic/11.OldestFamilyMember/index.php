<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:40 AM
 */


use FamilyMembers\Family;
use FamilyMembers\Person;

require_once 'Person.php';
require_once 'Family.php';
$family = new Family();
$numOfLines = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $numOfLines; $i++) {
    $memberDetails = explode(" ", trim(fgets(STDIN)));
    $member = new Person($memberDetails[0], intval($memberDetails[1]));
    $family->addMember($member);
}
echo $family->getOldestMember();
