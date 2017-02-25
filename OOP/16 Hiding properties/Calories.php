<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 12:38 AM
 */
class Calories
{
    // Желателно е свойствата да са private или protected и да се достъпват или чрез конструктор или чрез Get and Set методи
    private $age;
    private $sex;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param "$age must be between 2 and 100"
     */
    public function setAge($age)
    {
        if ($age >= 2 && $age <= 100) {
            $this->age = $age;
        }
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }


}