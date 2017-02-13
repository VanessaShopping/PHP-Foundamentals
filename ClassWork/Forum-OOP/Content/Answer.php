<?php
namespace Content;

use Author\User;

/**
 * Created by PhpStorm.
 * Author: VanessaShopping
 * Date: 12-Feb-17
 * Time: 3:50 PM
 */
class Answer
{
    const BODY_MIN_LENGTH = 7;
    private static $lastId;
    /**
     * @var integer
     */
    private $id;


    /**
     * @var string
     */
    private $body;


    /**
     * @var User
     */
    private $author;


    /**
     * @var Question
     */
    private $question;


    /**
     * @var Answer
     */
    private $answer;

    /**
     * @var Answer[]
     */
    private $comments = [];


    /*CONSTRUCT*/
    public function __construct(string $body, User $author, Question $question, Answer $answer = null)
    {
        $this->setBody($body);
        $this->setAuthor($author);
        $this->setQuestion($question);
        $this->setAnswer($answer);
        $this->id = ++self::$lastId;

    }


    /*GETTERS AND SETTERS*/

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body)
    {
        if (strlen($body) < self::BODY_MIN_LENGTH) {
            throw new \Exception("Body is too short (class Answer)");
        }
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;
    }

    /**
     * @return Question
     */
    public function getQuestion(): Question
    {
        return $this->question;
    }

    /**
     * @param Question $question
     */
    public function setQuestion(Question $question)
    {
        $this->question = $question;
    }

    /**
     * @return Answer
     */
    public function getAnswer(): Answer
    {
        return $this->answer;
    }

    /**
     * @param Answer $answer
     */
    public function setAnswer(Answer $answer = null)
    {
        $this->answer = $answer;
    }

    /**
     * @return Answer[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param Answer[] $comments
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;
    }

    public function comment(Answer $answer)
    {
        $this->comments[] = $answer;
    }

    public function getId()
    {
        return $this->id;
    }

}