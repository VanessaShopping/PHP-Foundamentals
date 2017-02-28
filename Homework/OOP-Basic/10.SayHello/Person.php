<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:39 AM
 */

namespace Hello;
class Person
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello():string
    {
        return $this->name . ' says "Hello"!';
    }
}