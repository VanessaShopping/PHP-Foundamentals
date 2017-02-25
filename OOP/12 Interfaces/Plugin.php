<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:26 PM
 */

interface Plugin
{
    // Не може да декларираме свойства
    // Интерфейса задължава какво трябва да има в даден клас.

    public function play($stream);

    public function stop();

    // Методите няма тяло

}
