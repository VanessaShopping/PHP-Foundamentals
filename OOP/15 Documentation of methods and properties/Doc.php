<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 12:22 AM
 */
class Doc
{
    // коментар на един ред
    /* многоредов коментар */

    /**
     *
     * @todo
     * @author
     * @data
     */


    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function testMethod($a, $b)
    {
        return $a >= $b;
    }

    /**
     * @param $c
     * @return properties
     */
    public function testTwo($c){
        return $c;
    }
}