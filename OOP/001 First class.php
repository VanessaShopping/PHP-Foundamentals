<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 9:31 AM
 */
class Math
{
    private $const = 4; // Сздаваме променлива , която се нарича свойство

    // функциите които създаваме в класа се наричат методи
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function devide($a, $b)
    {
        return $a / $b;
    }

    public function sumWithConst($a)
    {
        return $a + $this->const; // За да използваме/извикаме свойството $const иползваме ключовата дума $this-> const
    }
// Методите Get and Set ни позволяват да дадеме място през което различни свойства
// могат да бъдат взимани и слагани
    public function setConst($c)
    {
        if ($c != 0) {
            $this->const = $c;
        }
    }

    public function getConst()
    {
        return $this->const;
    }
}

$createNewObject = new Math(); // в променливата $createNewObject създаваме нов обект от класа Math чрез ключовата дума NEW
echo '$a + $b= 3 + 5= ' . $createNewObject->sum(3, 5) . '<br>'; // Когато искаме да достъпим метод от даден клас използваме "->" и името на метода
echo '$a / $b= 15 + 3= ' . $createNewObject->devide(15, 3) . '<br>';
echo '$a / $this->const= 32 + 4= ' . $createNewObject->sumWithConst(32) . '<br>';

$createNewObject->setConst(8); // Променяме свойството $const , когато е private , чрез метода SetConst
echo $createNewObject->getConst() . ' Вземаме стойността на свойството $const';
// Ако не искаме никой да взема стойноста на свйствата които са private
// просто не му даваме възможност като не добавяме метода getConst()
