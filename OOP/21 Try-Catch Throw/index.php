<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 7:14 PM
 */

include_once "UserModel.php";

$user = new UserModel();
// Може да има повече от 1 Catch block
// В условието на Catch-а казваме кой Exception да се изпълни
// Можем да си създадем нов клас който е extend на Exception
// Примерно class MyExc extend Exception
// И когато в условието на Catch кажем MyExc $exc когато прихване грешка ще се изпълни точно този Catch

try {
    $result = $user->register('Pesho', 'p@p.bg', 'aaa');
} catch (MyExc $exc) {
    echo "MyExc => " . $exc->getCode() . " " . $exc->MyNewExc();
} catch (Exception $exc) {
    echo "Exception => " . $exc->getCode() . " " . $exc->getMessage() . "\n";
}

// Ако прихванем грешка в блока Try се изпълнява и блока в Catch
// Ако няма изключение блока Catch не се изпълнява

// Има значение подредбата на Catch , ако сме създали допълнителен нов клас MyExc който е extend на Exception
// По този начин и двата класа php ги мисли за един и ги възприема като един
// В условието Catch-a проверява дали Exception и MyExc са едни и същи класове
// Те са защото MyExc наследява Exception

// MyExc Е Exception
// Exception НЕ Е MyExc ! ! !