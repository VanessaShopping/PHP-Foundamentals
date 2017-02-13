<?php
namespace Author;

use Content\Answer;
use Content\Question;
/**
 * Created by PhpStorm.
 * Author: VanessaShopping
 * Date: 12-Feb-17
 * Time: 3:20 PM
 */
class User
{
    private static $lastID;

    private $id;
    private $username;
    private $password;
    private $questions = [];
    private $answers = [];
    private $comments = [];


    public function __construct(string $username, string $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
        $this->id = ++self::$lastID;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getQuestions()
    {
        return $this->questions;
    }

    public function askQuestion(Question $question)
    {
        $this->questions[] = $question;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function answer(Question $question, Answer $answer)
    {
        $this->answers[] = $answer;
        $question->answer($answer);
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function comment(Answer $comment, Answer $answer)
    {
        $this->comments[] = $comment;
        $answer->comment($comment);
    }
}