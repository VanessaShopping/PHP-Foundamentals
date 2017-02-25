<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 6:36 PM
 */
class DecoratorFactory
{
    private function __constructor()
    {

    }

    public static function select($type, $obj)
    {
        if ($type == 'html') {
            return new HtmlDecorator($obj);
        } else if ($type == 'pdf') {
            return new PDFDecorator($obj);
        }
        return 'Invalid type';
    }


}