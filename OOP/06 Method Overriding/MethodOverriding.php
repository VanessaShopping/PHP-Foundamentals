<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 5:42 PM
 */

include 'C:\xampp\htdocs\PHP-Foundamentals\OOP\05 Inheritance\Animal.php';
include 'C:\xampp\htdocs\PHP-Foundamentals\OOP\05 Inheritance\Human.php';


class MethodOverriding extends Human
{

    public function goToEat() // Презаписване на методи. Този метод е от класа Animal. Animal e extends на Human
        // Метода в класа Animal няма да се изпълни, понеже php ще намери  първо метода в класа MethdOverriding .
    {
        echo "Method is overriding :) \n";
        /*parent::goToEat(); // TODO: Change the autogenerated stub*/
    }

}
// Ако не искаме да се презаписват дадени методи трябва да добавим ключовата дима "final"
// final public function goToEat()
