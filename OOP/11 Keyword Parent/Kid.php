<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 7:28 PM
 */
class Kid extends ParentKW
{
    public function __construct()
    {
        parent::__construct();
        echo 'construct Kid';
    }

    public function sameName()
    {
        parent::sameName();
        echo 'Kid sameName';
    }

    // Когато наследяваме друг клас и в него има конструктор или метод със същото име, той няма да се изпълни
    // Т.е. Ако направим инстанция на класа Kid ще се изпълни конструктора в Kid, ако няма конструктор чак тогава
    // ще се изпълни този в класа ParentKW, който наследяваме.
    // За да се изпълнят и двата конструктора трябва да използваме ключовата дума "parent"

}