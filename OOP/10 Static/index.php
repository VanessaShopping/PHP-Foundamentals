<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 19-Feb-17
 * Time: 10:39 PM
 */
include "StaticMethodsProperties.php";

StaticMethodsProperties::validateName();
echo "\n";

$newObj = new StaticMethodsProperties();
$newObj->validateName();
echo "\n";

echo StaticMethodsProperties::$publicAge;
echo "\n";

$ageOne = new StaticMethodsProperties();
$ageTwo = new StaticMethodsProperties();

echo $ageOne->getAge() . "\n";
echo $ageTwo->getAge() . "\n";

StaticMethodsProperties::setAge(44); // Понеже статичните методи и свойства не са обвързани с даден обект, когато променим
// статичното свойство, то се променя за всички обекти.
// Стойноста на тези свойства е еднаква за всички инстанции. Ако я променим , се променя навсякъде

echo $ageOne->getAge() . "\n";
echo $ageTwo->getAge() . "\n";