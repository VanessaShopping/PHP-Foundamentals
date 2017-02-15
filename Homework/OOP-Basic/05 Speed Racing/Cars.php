<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 15-Feb-17
 * Time: 11:06 AM
 */
class Car
{
    private $model;
    private $fuelAmount;
    private $fuelCost;
    private $distanceTravelled = 0;


    public function __construct(string $model, float $fuelAmount, float $fuelCost)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCost = $fuelCost;
    }

    public function Drive(float $km)
    {
        $cost = $km * $this->fuelCost;
        $cost = round($cost, 2);
        if ($cost > round($this->fuelAmount, 2)) {
            throw new Exception('Insufficient fuel for the drive');
        }
        $this->fuelAmount -= $cost;
        $this->distanceTravelled += $km;
    }

    public function __toString() // Позволява обекта да се принтира като стринг
    {
        // TODO: Implement __toString() method.
        return $this->model . " " . number_format($this->fuelAmount, 2) . " " . ceil($this->distanceTravelled);
    }
}