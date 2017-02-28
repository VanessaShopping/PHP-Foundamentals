<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:36 AM
 */
namespace GoogleApp\Models;
class Car
{
    private $model;
    private $speed;
    public function __construct(string $model, int $speed)
    {
        $this->model = $model;
        $this->speed = $speed;
    }
    public function __toString(): string
    {
        return "{$this->model} {$this->speed}";
    }
}