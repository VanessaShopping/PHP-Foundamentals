<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 12-Mar-17
 * Time: 6:52 PM
 */

$someText = 'Ala bala';

if (file_exists('myFile.txt')) {
    echo 'File exist';
    /*unlink('myFile.txt');*/ // Изтриване на файл
    $b = file_get_contents('myFile.txt'); // Чете целия файл без да прави никаква обработка
    echo $b . '<br>';
    $c = file('myFile.txt'); // Всеки нов ред от файла се записва в масив
    var_dump($c);
} else {
    file_put_contents('myFile.txt', $someText);
}

// Проверка дали дадена директория съществува и дали тази директория е директория

if (is_dir("C:/xampp/htdocs/PHP-Foundamentals")){
    echo 'Is Dir';
}else{
    echo 'Invalid Dir';
}