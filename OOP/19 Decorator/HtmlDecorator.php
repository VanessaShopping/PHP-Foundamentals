<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 11:35 AM
 */
class HtmlDecorator
{
    private $obj;

    public function __construct($obj)
    {
        /*if (($obj instanceof InterfaceDecorator)) {
            throw new Exception("Exception");
        }*/
        $this->obj = $obj;
    }

    public function getFormatedOutput()
    {
        return '<b> htmlDecorator ' . $this->obj->getDataaa() . '</b>';
    }
}