<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 14-Feb-17
 * Time: 6:12 PM
 */
include_once "GetSet.php";

$human = new GetSet();
$human->name = 'Pesho';
/*echo $human->name;*/

// Понеже php е динамичен език можем да създадем свойство в обекта без да сме го декларирали

$human->name2 = 'Gosho';
echo $human->name2;

/* За да се предпазим от това ползваме метода __Set. Когато имаме такъв метод в класа и когато някой иска да създаде ново свойство
което не е дефинирано в класа , метода __Set се извиква и казва какво трябва да стане. Ако е празен дава грешка ,че не можем
да ползваме недефинирано свойство.
Метода СЕТ взема два параметъра $name и $valuе --> Име на свойството и стойност на свойстовото */
