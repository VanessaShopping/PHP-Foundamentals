<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 4:19 PM
 */
class ConstuctDestruct
{
    private $carBrand;
    private $carModel;
    private $carHP;

    public function getModel() : string
    {
        return $this->carModel;
    }

    public function getCarBrand() : string
    {
        return $this->carBrand;
    }

    public function getCarHP() : int
    {
        return $this->carHP;
    }


    // Construct - Конструтора е метод ,който се извиква веднага след като се създаде нов обект
    // Той ни позволява още със създаването на обекта да добавим данните, вместо после да ползваме
    // $car->setBrand('Audi'); $car->setModel('Q7');
    // Ако нямаме метод 'set'  не можем да добавим стойности към свойствата, освен ако нямаме конструктор
    // метода 'set' може да съществува в класа, но ако е Private  не може да го достъпим отвън.
    // Това важи и за свойствата
    // **** Конструкторите не могат да връщат стойност --> return
    public function __construct(string $brand, string $model, int $hp)
    {
        $this->carBrand = $brand;
        $this->carModel = $model;
        // Можем да ползваме методи които са 'private' само ако са в същия Клас.
        $this->setCarHp($hp);
    }

    private function setCarHp(int $hp)
    {
        $this->carHP = $hp;
    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}