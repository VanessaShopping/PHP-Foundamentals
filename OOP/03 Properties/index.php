<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 3:56 PM
 */

include_once 'Properties.php';

$carOne = new Properties();
$carOne->setModel('Audi'); // В обекта $carOne извикваме метода setModel
// който очаква стринг с името на модела кола.
// В обекта има свйство $carModel. Това свойство получава името което сме дали ,чрез метода setModel()
$carTwo = new Properties();
$carTwo->setModel('BMW');

echo $carOne->getModel() . "\n";
echo $carTwo->getModel();