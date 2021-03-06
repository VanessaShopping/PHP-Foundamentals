<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 13-Feb-17
 * Time: 8:54 PM
 */
class Player
{
    private static $lastId;

    private $id;
    private $name;
    private $health;
    private $attack;

    public function __construct(string $name, int $health)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack = rand(1, 8);
        $this->id = ++self::$lastId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function reduceHealth(int $health)
    {
        $this->health -= $health;
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }

    public function attack(Player $player)
    {
        if ($player->getId() == $this->getId()) {
            throw new Exception("Cannot attack yourself!");
        }

        $player->reduceHealth($this->getAttack());
    }
}