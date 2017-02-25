<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Feb-17
 * Time: 3:31 PM
 */


// Type hinting - казваме какви типове може да имат дадените обекте
// Type hinting рабори само за обекти. Другото което може да ползваме е array
// Пишем името на класа пред променливата TestClass $obj
// int , bool не работят
function someFunc(TestClass $obj, array $arr)
{
    var_dump($obj);
}

class TestClass{

}

