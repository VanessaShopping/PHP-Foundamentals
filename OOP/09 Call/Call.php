<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 19-Feb-17
 * Time: 10:31 PM
 */
class Call
{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        // Извиква се когато се опитваме да използваме недефиниран метод. Работи по същия начин като _get и _set , само че за методи
        echo $name . " " . $arguments;
    }
}