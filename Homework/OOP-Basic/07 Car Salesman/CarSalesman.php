<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:58 AM
 */
class CarSalesman
{
    private $model;
    private $engine;
    private $weight;
    private $color;

    function __construct(string $model,
                         Engine $engine,
                         string $weight,
                         string $color)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;
    }

    public function __toString()
    {
        return $this->model . ':' . PHP_EOL .
        '  ' . $this->engine->getModel() . ':' . PHP_EOL .
        '    Power: ' . $this->engine->getPower() . PHP_EOL .
        '    Displacement: ' . $this->engine->getDisplacement() . PHP_EOL .
        '    Efficiency: ' . $this->engine->getEfficiency() . PHP_EOL .
        '  Weight: ' . $this->weight . PHP_EOL .
        '  Color: ' . $this->color . PHP_EOL;
    }
}

class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    function __construct(string $model,
                         string $power,
                         string $displacement,
                         string $efficiency)
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }

    public function getEfficiency()
    {
        return $this->efficiency;
    }

}