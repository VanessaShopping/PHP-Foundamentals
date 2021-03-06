<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 10:47 AM
 */
// Име на шаблона
// Шаблона за дизайн е направен за решаването на един специфичен проблем
// Решение на съответния проблем


// Идеята е класа да има само една инсталция(обект). Примерно ако правим връза с БД ние създаваме нов обект от класа ДБ.
// Ако се наложи по-надоло в кода пак да се вържем със БД е желателно да ползваме вече направената връзка
// Т.е. да не правим нова връзка понеже времето което ще отнеме за връзката с БД ще се увеличи
class Singleton
{
    private static $instance = null; // Понеже свойството е статично, то пази своята стойност, понеже не е обвързано с никаква инстанция

    private function __construct()
    {

    }

    public static function getInstance() // За да предотвратим повторна кънекция с БД правим статично свойство което да пази
        // първия наравен обект
        // При повторно правене на инстанция на класа ще влезе в иф проверка дали вече не сме направили такава.
        // Ако имаме ,то няма да ни позволи да направим нова а ще ползва старата
    {
        if (self::$instance == null) {
        self::$instance= new Singleton();
            echo 'First instance' . "\n";
        }else{
            echo 'Second instance' . "\n";
        }
        return self::$instance;
    }

}