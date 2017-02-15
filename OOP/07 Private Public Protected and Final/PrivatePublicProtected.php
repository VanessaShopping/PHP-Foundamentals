<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 5:55 PM
 */
include_once "HelloWorld.php";

class PrivatePublicProtected extends HelloWorld
{
// Public    - всеки може да го извиква. От всякъде-> В класовете, в наследените класове , в обектите
// Private   - Може да бъде извикан само в класа в който е.
// Protected - Може да бъде извикан в класа в който е И във всички класове които го наследяват

    public function showProtected()
    {
        $this->protectedFunc();
    }

    public function showPrivate()
    {
        $this->showPrivate();
    }
}