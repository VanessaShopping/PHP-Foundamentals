<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Feb-17
 * Time: 11:26 AM
 */
namespace MVCFramework;
include 'Loader.php';
class App
{
    private static $_instane = null;


    private function __construct()
    {
        \MVCFramework\Loader::registerNamespace('MVCFramework', dirname(__FILE__).DIRECTORY_SEPARATOR);
        // dirname - пълния път на класа-a => C:\xampp\htdocs\PHP-Foundamentals\Private MVC\MVC Framework\Source Files\
        \MVCFramework\Loader::registerAutoLoad();
    }

    public function run()
    {

    }

    /**
     * @return \MVCFramework\App
     */
    public static function getInstance()
    {
        if (self::$_instane == null) {
            self::$_instane = new \MVCFramework\App();
        }
        return self::$_instane;
    }
}