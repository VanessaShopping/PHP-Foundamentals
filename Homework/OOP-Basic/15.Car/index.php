<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 10:18 AM
 */

use CarApp\App;

spl_autoload_register(function ($className) {
    require_once "{$className}.php";
});
$app = new App();
$app->start();