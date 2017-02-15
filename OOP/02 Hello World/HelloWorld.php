<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 3:16 PM
 */
class HelloWorld
{
    public function sayHello()
    {
        echo 'Hello World !';
    }

    private function privateFunc()
    {
        echo "private function";
    }

    protected function protectedFunc()
    {
        echo "protected function";
    }
}