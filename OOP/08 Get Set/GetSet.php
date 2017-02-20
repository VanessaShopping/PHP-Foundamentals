<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 6:12 PM
 */
class GetSet
{
    public $name;
    private $data = array();

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name] = $value; // Когато някой се опитва да създаде свойство което го няма в класа , чрез масива дата
        // запаметяваме данните. Ключа от масива е името на свойството а стойнста на масива е стойноста на свойството
    }
public function __get($name)
{
    // TODO: Implement __get() method.
    return $this->data[$name]; // Когато се опитваме да прочетем свойство което не е предварително декларирано автоматично
    // се извиква метода __get
}
}