<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:52 AM
 */
class Employee
{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;
    public function __construct(string $name, float $salary, string $position,
                                string $department, string $email = 'n/a', int $age = -1)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function getDepartment()
    {
        return $this->department;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getAge()
    {
        return $this->age;
    }
}