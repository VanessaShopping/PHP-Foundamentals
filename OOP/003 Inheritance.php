<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 30-Jan-17
 * Time: 8:06 PM
 */
/*inheritance - наследяване*/

class Product
{
    protected $price;
    protected $name;
    protected $description;

    public function __construct($price = '', $name = '', $description = '')
    {
        $this->price = $price;
        $this->name = $name;
        $this->description = $description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription(string $description)
    {
        $this->description = $description;
    }
// shortkey to create constructor, get, set, get and set  --> Alt Ins
}

class car extends Product // класа Car наследява всички методи, свойства от класа Product ,чрез ключовата дума extends
{
    protected $model;
    protected $hp;

    public function __construct($model, $hp)
    {
        $this->model = $model;
        $this->hp = $hp;
    }


    public function getModel(): string
    {
        return $this->model;
    }


    public function setModel(string $model)
    {
        $this->model = $model;
    }


    public function getHp(): string
    {
        return $this->hp;
    }


    public function setHp(string $hp)
    {
        $this->hp = $hp;
    }

}

$myCar = new car('BMW', 350); // Създаваме нов обект. Понеже има метод конструктор , коиото автоматично се извиква
// когато се създава нов обект, му задаваме 2 параметъра който той очаква. В случея двата параметъра са 
// Модел на автомобила --> BMW      и       конски сили --> 350
// За да имаме възможност да достъпим до тези две свойства , които са protected (или private), ни трябва конструктор
var_dump($myCar);
$myCar->setPrice(3599);
$myCar->setDescription('моята кола');
$myCar->setName('M-Power');
var_dump($myCar);

// Разлика между public protected и private
// когато метода или свойството започва със Public , те са достъпни и видими не само в класа но и извън него
// когато метода или свойството започва със Private , те са достъпни само и единствено в самия клас
// когато метода или свойството започва със Protected , те са достъпни само в самия клас и в другите класове които го наследяват