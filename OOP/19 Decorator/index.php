<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 11:30 AM
 */
include "Article.php";
include "HtmlDecorator.php";

$article = new Article(); // На променливата $article присвояваме обект от класа Article
echo $article->getDataaa(); // Вземаме данните от метода

echo "\n";

$htmlDecorator = new HtmlDecorator($article); // Ако искаме тези данни от Article да ги направим на html код
// правим нова инстанция на htmlDecorator класа  и му подаваме този article
// Той вътре в него взема article и от текст го прави на html
// Ако ни трябва друг  вид изход правим други класове примерно PDFDecorator или др.
echo $htmlDecorator->getFormatedOutput();
