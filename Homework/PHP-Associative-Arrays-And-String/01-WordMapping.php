<?php
if (isset($_GET['input']) && !empty($_GET['input'])) {
$inputText = trim(strtolower($_GET['input']));
/*$inputText = preg_replace('/\s+/', ' ', $inputText); // Заменяме всички whitespace с един space*/
$inputText = str_word_count($inputText, 1);
/*$text = explode(" ", $inputText);
$text = preg_replace('/[^a-z\-]/', '', $text);*/
$output = array_count_values($inputText);
?>




<table border='2'><?php foreach ($output as $key => $value) : ?>
<tr><td><?= $key ?></td><td><?= $value ?></td></tr><?php endforeach;
    } ?></table>