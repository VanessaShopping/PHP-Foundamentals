<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:34 AM
 */

use GoogleApp\App;
spl_autoload_register(function ($className) {
    require_once "{$className}.php";
});
$app = new App();
$app->start();