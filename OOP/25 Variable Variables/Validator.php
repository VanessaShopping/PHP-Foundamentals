<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Feb-17
 * Time: 5:46 PM
 */
class Validator
{
    private $data = array(); // Асоциативен масив който държи данните ни -> 'username' => 'Pesho' , 'pass'=> '1234qwe'
    private $rules = array(); // Масив от масиви.
    // Ключа на главния/външния мисв трябва да е като ключа от $data --> username,pass
    // Стойнста е като на обикновен масив. 0 1 2 3..
    // Под индекс 0 стойноста е асоциативен масив с ключ->'тип на проверката' и стойност->'параметър на проверката'

    /**
     * @param $params
     */
    public function setData($params) // $params е асоциативен масив
    {
        $this->data = $params;
    }

    /**
     * @param $field
     * @param $type
     * @param $param
     */
    public function setRules($field, $type, $param)
    {
        $this->rules[$field][] = array('type' => $type, 'param' => $param);
        return $this;
    }
// $field - това е ключа масива $rules. Стойносите на $rules са асоциативни масиви
// $rules['username'] = type-Проверка , $param-стойност на проверката
// $type - това е функцията която искаме да извикаме
// $param - параметрите които трябва да спазим във функцията която сме извикали

// $this->rules - Правим два форийч цикъла.
// $k - ключа от главния масви                             -> 'username' , 'pass' etc.
// $v - тази стойност е ключа от вътрешния масив           -> max_length
// $value - това е параметрите които трябва да спазваме    -> 4
    public function validate()
    {
        foreach ($this->rules as $k => $v) {
            foreach ($v as $value) {
                //$this->$value['type']($k, $value['param']); //???????????????????????????
                if ($value['type'] == 'min_length') {
                    $this->min_length($k, $value['param']);
                } else if ($value['type'] == 'max_length') {
                    $this->max_length($k, $value['param']);
                }
            }
        }
    }

    private function min_length($field, $param)
    {
        if (mb_strlen($this->data[$field]) > $param) {
            // return true;
            echo 'min length is OK' . "\n";
        } else {
            echo 'min length is NOT ok' . "\n";
        }
    }

    private function max_length($field, $param)
    {
        if (mb_strlen($this->data[$field]) < $param) {
            // return true;
            echo 'max length is OK' . "\n";
        } else {
            echo 'max length is NOT ok' . "\n";
        }
    }

}