<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 26-Feb-17
 * Time: 11:43 AM
 */

namespace MVCFramework;

final class Loader
{
// Никога не трябва да има инстанция
// Никога не трябва да бъде наследяван
// Ползва се ???????

    private static $namespace = array();

    private function __construct()
    {

    }

    public static function registerAutoLoad()
    {
        spl_autoload_register(array('\MVCFramework\Loader', 'autoload'));
        // Ако попаднеш на клас който не е инклууднат, извикай метода 'autoload' в класа "Loader" в namespace-a MVCFramework
    }


    public static function autoload($class) // $class = '\MVCFramework\Loader' => Класа Loader.php
    {
        self::loadClass($class);
    }

//TODO central error reporting
    private static function loadClass($class)
    {
        foreach (self::$namespace as $k => $v) {
            if (strpos($class, $k) === 0) { // strpos намира от стринга $class на коя позиция е $k
                // $class = \MVCFramework\Loader ==> [0]=MVCFramework [1]=Loader
                // $k e ключа от $namespace масива => Името на namespace-а ==> MVCFramework
                // $v е пътя на namespace-a

                $f = str_replace('\\', DIRECTORY_SEPARATOR, $class); // правим replace na $class и по точно
                // сменяме '\' с такива каквит ползва ОС. За Линукс и за Уиндоус се различават
                $f = substr_replace($f, $v, 0, strlen($k)) . '.php';
                $f = realpath($f);
                if ($f && is_readable($f)) {
                    include $f;
                }else {
                    // TODO
                    throw new \Exception('File cannot be included Yaaaaaa');
                }

                /* $file = realpath(substr_replace(str_replace('\\', DIRECTORY_SEPARATOR, $class), $v, 0, strlen($k)) . '.php)');
                 if ($file && is_readable($file)) {
                     include $file;
                 } else {
                     // TODO
                     throw new \Exception('File cannot be included Yaaaaaa');
                 }
                 break;*/
            }
        }
    }


    public static function registerNamespace($namespace, $path) // името на namespace-a и физическия път където сме
    {
        $namespace = trim($namespace);

        if (strlen($namespace) > 0) { // Проверяваме дали е подаден някакъв неймспасе, Ако не е отиваме в else и хвърляме Exception
            if (!$path) { // Проверяваме дали има път , подадения namespace, Ако няма хвърляме Exception
                throw new \Exception('Invalid path');
            }

            $_path = realpath($path); // realpath Връща пълния път или връща false ако няма такъв път

            /*echo $path . '<br>';  C:\xampp\htdocs\PHP-Foundamentals\Private MVC\MVC Framework\Source Files\
            echo $_path;            C:\xampp\htdocs\PHP-Foundamentals\Private MVC\MVC Framework\Source Files
            */

            if ($_path && is_dir($_path) && is_readable($_path)) {
                // is_dir проверява дали подадения път на неймспсе-а е директория
                // is_readable проверяваме дали може да бъде прочетена от PHP
                self::$namespace[$namespace . '\\'] = $_path . DIRECTORY_SEPARATOR;
                // Като ключ на масива $namespace слагаме името на namespace-a
                // Като стойност слагаме пътя + DIRECTORY_SEPARATOR
                // Dir_Sep = Linux /  , Windows \ . Разделител който според зависи на каква ОС сме
            } else {
                throw new \Exception('Koftiii - >Namespace directory read error' . $path);
            }
        } else {
            // TODO
            throw new \Exception('Invalid namespace', $namespace);
        }
    }


}