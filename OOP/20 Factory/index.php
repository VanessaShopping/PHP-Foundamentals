<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 12:12 PM
 */

// Крие логиката по избор точно кой клас трябва да бъде инстанциран

include 'C:\xampp\htdocs\PHP-Foundamentals\OOP\19 Decorator\HtmlDecorator.php';
include 'C:\xampp\htdocs\PHP-Foundamentals\OOP\19 Decorator\Article.php';
include 'PDFDecorator.php';
include "DecoratorFactory.php";

$article = new Article(); // 'Data from DB'

$a = DecoratorFactory::select('pdf', $article); // Подаваме в какъв формат искаме да 'декорираме' статията
$b = DecoratorFactory::select('html', $article);

echo $a->getFormatedOutput();
echo "\n";
echo $b->getFormatedOutput();
echo "\n";

/* Try Cache !?!?!?
$c= DecoratorFactory::select('WrongType', $article);
echo $c->getFormatedOutput();*/