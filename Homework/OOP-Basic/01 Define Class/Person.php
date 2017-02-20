<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 16-Feb-17
 * Time: 11:15 AM
 */
class Person
{
    private $name;
    private $age;

    public function __construct(string $name = null, int $age = null)
    {
        $this->name = $name;
        $this->age = $age;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


}