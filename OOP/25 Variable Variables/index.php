<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Feb-17
 * Time: 5:45 PM
 */

include "Validator.php";

$val = new Validator();

$val->setData(array('username' => 'Pesho', 'pass' => 'askdfgh'));

/*
$val->setRules('username', 'min_length', 4);
$val->setRules('username', 'max_length', 8);
$val->setRules('pass', 'min_length', 6);
$val->setRules('pass', 'max_length', 10); */

// Създаваме правила за валидиране
// В класа Validator на метода setRules му казваме return $this. за да върне себе си като го извикаме.
// Така можем на 1 ред да запишем няколко пъти правилата които искаме

$val->setRules('username', 'min_length', 4)
    ->setRules('username', 'max_length', 8)
    ->setRules('pass', 'min_length', 6)
    ->setRules('pass', 'max_length', 10);


$val->validate();