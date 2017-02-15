<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 3:44 PM
 */
class Properties
{
    private $carModel;

    public function setModel(string $model)
    {
        $this->carModel = $model;
    }

    public function getModel() : string
    {
        return $this->carModel;
    }
}