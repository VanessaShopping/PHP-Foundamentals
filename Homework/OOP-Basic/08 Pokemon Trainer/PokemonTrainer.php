<?php

/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 12:01 PM
 */
class PokemonTrainer
{
    private $name;
    private $numberOfBadges = 0;
    private $pokemonCollection = array();

    function __construct(string $name, Pokemon $pokemon)
    {
        $this->name = $name;
        $this->pokemonCollection[] = $pokemon;
    }

    public function getPokemonCollection()
    {
        return $this->pokemonCollection;
    }

    public function setPokemonCollection($pokemonCollection)
    {
        $this->pokemonCollection = $pokemonCollection;
    }

    public function addPokemonToCollection(Pokemon $pokemon)
    {
        $this->pokemonCollection[] = $pokemon;
    }

    public function getNumberOfPokemon()
    {
        return count($this->pokemonCollection);
    }

    public function getName()
    {
        return $this->name;
    }

    public function addBadge()
    {
        $this->numberOfBadges++;
    }

    public function getNumberOfBadges()
    {
        return $this->numberOfBadges;
    }
}

class Pokemon
{
    private $name;
    private $element;
    private $health;

    function __construct(string $name, string $element, int $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function reduceHealth()
    {
        $this->health -= 10;
    }
}