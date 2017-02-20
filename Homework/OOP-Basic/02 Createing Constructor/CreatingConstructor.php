<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 16-Feb-17
 * Time: 11:22 AM
 */
class CreatingConstructor
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name . " " . $this->age;
    }
}