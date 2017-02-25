<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 19-Feb-17
 * Time: 10:40 PM
 */
class StaticMethodsProperties
{
    static public $publicAge = 19;
    static private $privateAge = 20;

    static public function validateName()
    {
        echo 'validate';
        // Статичните методи са като обикновенните, с тази разлика ,че не можем да използваме $this
    }

    static public function setAge($age)
    {
        self::$privateAge = $age;
        /*StaticMethodsProperties::$privateAge;*/
    }

    public function getAge()
    {
        return self::$privateAge;
    }
}