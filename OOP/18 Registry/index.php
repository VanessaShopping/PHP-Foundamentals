<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 11:14 AM
 */
include "Registry.php";
// Целта не registry  е да имаме едно централно място където да пишем някаква информация и да взимаме тази информация
// Това е най-добрия заместител е на глобалните променливи

Registry::setData('name', 'Pesho');
echo Registry::getData('name');
echo "\n";
// Втори начин

$reg = new RegistrySecond();
$reg->name = "Pesho";
echo $reg->name;