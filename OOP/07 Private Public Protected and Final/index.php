<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 5:56 PM
 */
include_once "PrivatePublicProtected.php";

$protected = new PrivatePublicProtected();
$protected->showProtected();

$private = new PrivatePublicProtected(); // Няма да ни позволи да достъпим private методи или private свойства :)
$private->showPrivate();
