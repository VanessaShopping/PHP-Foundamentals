<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 06-Mar-17
 * Time: 12:24 PM
 */
$str = $_GET['array'];
$arr = explode(PHP_EOL, $str);
$matrix = array();
for ($k = 0; $k < count($arr); $k++) {
    $str = $arr[$k];
    for ($i = 0; $i < strlen($str); $i++) {
        $matrix[$k][$i] = $str[$i];
    }
}

for ($row = 0; $row < count($matrix); $row++) {
    for ($col = 0; $col < count($matrix[$row]); $col++) {
        switch ($matrix[$row][$col]) {
            case "<":
                $matrix = leftDel($matrix, $row, $col);
                break;
            case ">":
                $matrix = rightDel($matrix, $row, $col);
                break;
            case "^":
                $matrix = upDel($matrix, $col, $row);
                break;
            case "v":
                $matrix = downDel($matrix, $col, $row);
                break;
            default;
                break;
        }
    }
}


function leftDel($matrix, $row, $col)
{
    $chek = $matrix[$row][$col] == '<' && $matrix[$row][$col] == '>' && $matrix[$row][$col] == '^' && $matrix[$row][$col] == 'v';
    // матрицата на ред $row започва да заменя символите наляво от индекса на колоната $col с празно място
    // Докато стигне края или докато не срещне друг специален символ
    while ($col >= 0) {
        if ($chek) {
            break;
        }
        if ($col - 1 >= 0) {
            $matrix[$row][$col - 1] = " ";
        }
        $col--;

    }
    return $matrix;

}

function rightDel($matrix, $row, $col)
{
    $chek = $matrix[$row][$col] == '<' && $matrix[$row][$col] == '>' && $matrix[$row][$col] == '^' && $matrix[$row][$col] == 'v';
    while ($col <= array_count_values($matrix[$row])) { // TODO брой стойности на реда
        if ($chek) {
            break;
        }
        if ($col - 1 >= 0) {
            $matrix[$row][$col - 1] = " ";
        }
        $col--;

    }
    return $matrix;

}

function upDel($matrix, $col, $row)
{
    $chek = $matrix[$row][$col] == '<' && $matrix[$row][$col] == '>' && $matrix[$row][$col] == '^' && $matrix[$row][$col] == 'v';
}

function downDel($matrix, $col, $row)
{
    $chek = $matrix[$row][$col] == '<' && $matrix[$row][$col] == '>' && $matrix[$row][$col] == '^' && $matrix[$row][$col] == 'v';

}