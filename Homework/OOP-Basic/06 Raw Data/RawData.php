<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:55 AM
 */
class Car
{
    private $model;
    private $engine;
    private $cargo;
    private $tyres = array();
    function __construct(string $model,
                         Engine $engine,
                         Cargo $cargo,
                         Tyre $tyre1, Tyre $tyre2,
                         Tyre $tyre3, Tyre $tyre4)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tyres = [$tyre1, $tyre2, $tyre3, $tyre4];
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getEngine()
    {
        return $this->engine;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function getTyres()
    {
        return $this->tyres;
    }
}
class Engine
{
    private $speed;
    private $power;
    function __construct(int $speed, int $power)
    {
        $this->speed = $speed;
        $this->power = $power;
    }
    public function getPower()
    {
        return $this->power;
    }
}
class Cargo
{
    private $weight;
    private $type;
    function __construct(int $weight, string $type)
    {
        $this->weight = $weight;
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
class Tyre
{
    private $pressure;
    private $age;
    function __construct(float $pressure, int $age)
    {
        $this->pressure = $pressure;
        $this->age = $age;
    }
    public function getPressure()
    {
        return $this->pressure;
    }
}