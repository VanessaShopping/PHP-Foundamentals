<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 16-Feb-17
 * Time: 12:05 PM
 */
require "OpinionRoll.php";
$linesCount = intval(trim(fgets(STDIN)));
$peopleOver30 = [];
for ($i = 0; $i < $linesCount; $i++) {
    $personalInfo = explode(" ", trim(fgets(STDIN)));
    list($name, $age) = [$personalInfo[0], intval($personalInfo[1])];
    if ($age > 30) {
        $person = new Person($name, $age);
        $peopleOver30[] = $person;
    }
}
function sortNames($a, $b)
{
    return strcmp($a->getName(), $b->getName());
}

usort($peopleOver30, "sortNames");
for ($i = 0; $i < count($peopleOver30); $i++) {
    if ($i != count($peopleOver30) - 1) {
        echo $peopleOver30[$i]->getName() . " - " . $peopleOver30[$i]->getAge() . "\n";
    } else {
        echo $peopleOver30[$i]->getName() . " - " . $peopleOver30[$i]->getAge();
    }
}