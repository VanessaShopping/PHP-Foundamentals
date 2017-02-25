<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 21-Feb-17
 * Time: 7:19 PM
 */
class UserModel
{
    public function register($name, $email, $pass)
    {
        if (mb_strlen($name) > 4) {
            if (mb_strlen($email) > 7) {

            } else {
                throw new Exception('Email is too short', 114);
            }
            if (mb_strlen($pass) > 4) {

            } else {
                throw new Exception('Password is too short', 113);
            }

        } else {
            /*throw new Exception($message, $code, $previous);*/
            throw new MyExc('Username is too short', 112);
        }
        return true;
    }
}

class MyExc extends Exception
{
    public function MyNewExc()
    {
        echo 'My New Exception - ERROR ';
    }
}
