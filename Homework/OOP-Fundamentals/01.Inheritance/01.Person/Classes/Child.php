<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 5:21 PM
 */

namespace Classes;
class Child extends Person
{
    protected function setAge(int $age)
    {
        if ($age >= 15) {
            throw new \Exception("Child’s age must be less than 15!");
        }
        parent::setAge($age);
    }
}