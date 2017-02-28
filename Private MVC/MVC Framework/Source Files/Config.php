<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Feb-17
 * Time: 2:26 PM
 */

namespace MVCFramework;


class Config // read only => singleton template
{
    private static $_instance = null;
    private $_configFolder = null;
    private $_configArray = array();

    private function __construct()
    {

    }

    public function setConfigFolder($configFolder) // $configFolder пътя към папката за конфигурация
    {
        if (!$configFolder) {
            throw new \Exception('Empty config folder path: ');
        }
        $_configFolder = realpath($configFolder);

        if ($_configFolder != false && is_dir($_configFolder) && is_readable($_configFolder)) {
            // clear old config data
            $this->_configArray = array();
            $this->_configFolder = $configFolder . DIRECTORY_SEPARATOR;
        } else {
            throw new \Exception('Config directory read error: ' . $configFolder);
        }
    }


    public function includeConfigFile($path)
    {
        if (!$path) {
            //TODO
            throw new \Exception('TODO exc');
        }
        $_file = realpath($path);
        if ($_file != false && is_file($_file) && is_readable($_file)) {
            $_basename = explode('.php', basename($_file))[0];
            include $_file;
            $this->_configArray[$_basename] = $cnf;
        } else{
            // TODO
            throw new \Exception('Config file read error:' . $path);
        }
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        if (!$this->_configArray[$name]) {
            $this->includeConfigFile($this->_configFolder . $name . '.php');
        }
        if (array_key_exists($name, $this->_configArray)) {
            return $this->_configArray[$name];
        }
        return $this->_configFolder;
    }


    /**
     * @return \MVCFramework\Config
     */
    public
    static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new \MVCFramework\Config();
        }
        return self::$_instance;
    }
}