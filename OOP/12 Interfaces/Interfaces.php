<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 7:57 PM
 */
include "Plugin.php";

class Interfaces implements Plugin // Можем също да добавим и разширение на класа. extends
// class Interfaces extends OthreClass implements Plugin
{
// Класа Interfaces имплементира интерфейса Plugin. Plugin2 e extended na Plugin.
// Всички методи от Plugin и от Plugin2 са задължителни.
// Трябва да ги има в този клас
    public function play($stream)
    {
        // TODO: Implement play() method.
        echo 'Play from Plugin interface' . "\n";
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo 'Stop from Plugin interface' . "\n";
    }

    public function pause()
    {
        // TODO: Implement pause() method.
        echo 'Pause from Plugin2 interface' . "\n";
    }
}