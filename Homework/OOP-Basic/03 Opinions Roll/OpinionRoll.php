<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 16-Feb-17
 * Time: 12:05 PM
 */class Person {
    private $name;
    private $age;
    public function __construct(string $name,int $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
}