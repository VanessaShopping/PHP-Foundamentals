<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 11:57 PM
 */
include "AbstractPlugin.php";

class MyPlugin extends AbstractPlugin
{

    public function getInfo()
    {
        // TODO: Implement getInfo() method.
        echo 'getInfo from MyPlugin extends AbstractPlugin' . "\n";
    }
}


