<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 11:17 AM
 */
class Registry
{
    // Първия вариянт на registry е със статични методи и свойства
    static private $data = array();

    private function __construct() // Като направим един празен конструктор , забраняваме някой да прави нови инстанции на регистри шаблона
    {

    }

    public static function setData($key, $value)
    {
        self::$data[$key] = $value;
    }

    public static function getData($key)
    {
        return self::$data[$key];
    }
}

// Registry шаблона няма за цел да проверява , валидира данните

class RegistrySecond
{
    private $dataSecond = array();

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->dataSecond[$name];
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->dataSecond[$name] = $value;
    }
}
// Втория вариянт е през инстанции