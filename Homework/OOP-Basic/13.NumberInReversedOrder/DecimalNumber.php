<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 10:16 AM
 */
class DecimalNumber
{
    private $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function getNumberReversed(): string
    {
        return strrev($this->number . '');
    }
}