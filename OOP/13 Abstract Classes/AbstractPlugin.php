<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:51 PM
 */
abstract class AbstractPlugin
{
    // Абстрактните класове са обикновенни класове  с тази разлика ,че в тях има метод/свйство което започва с ключовата дума abstract
    // Тези методи/свойства ,които са абстрактни, са задължителни както при Interface
    // Разликата е ,че в abstract class може да имаме и обикновенни методи и свойства а в интерфейса само методи без тяло
    // Абстрактние методи също нямат тяло
    // Полетата не могат да бъдат декларирани като абстрактни
    // Щом имаме поне 1 метод/свойство което е абстрактно, то и класа трябва да го направим абстрактен
    public function play()
    {
        echo 'Play from class AbstractPlugin' . "\n";
    }

    // abstract public $prop; --> Fields cannot be declared abstract
    abstract public function getInfo();
}


