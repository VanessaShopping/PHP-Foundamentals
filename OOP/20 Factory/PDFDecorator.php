<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 6:32 PM
 */
class PDFDecorator
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
        return '<b> pdfDecorator ' . $this->obj->getDataaa() . '</b>';
    }
}