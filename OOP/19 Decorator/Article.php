<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 11:31 AM
 */
include "InterfaceDecorator.php";
class Article implements InterfaceDecorator
{
    // Шаблон декоратор: Входящите данни да ги покажем по различни начини --> html , pdf , etc.
    public function getDataaa()
    {
        return "Data from DB"; // Данни които идват примерно от ДБ
        // В случея "Data from DB" е коментар взет от ДБ
    }
}