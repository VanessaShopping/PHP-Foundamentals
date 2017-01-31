<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 9:32 AM
 */
class User
{
    private $userName = ' ';

    public function __construct($usnm) // Конструктора е метод, които автоматично се извиква ,когато се създаде нов обект.
        // Задължително трябва да бъде PUBLIC
    {
        $this->userName = $usnm;
        $this->getUsername();
    }

    public function getUsername()
    {
        return $this->userName;
    }
}

$userObj = new User('Petar');
echo $userObj->getUsername();