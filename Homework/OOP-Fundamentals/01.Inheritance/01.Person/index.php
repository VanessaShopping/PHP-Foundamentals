<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 5:12 PM
 */

declare(strict_types = 1);
spl_autoload_register(function ($className) {
    require_once "index.php";
});
use Classes\Child;

$children = [];
try {
    $children[] = new Child("John", 12);
    $children[] = new Child("Paul", 6);
    $children[] = new Child("Mike", 16);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
/**
 * @var $child Child
 */
foreach ($children as $child) {
    echo PHP_EOL . $child->getName() . " " . $child->getAge();
}