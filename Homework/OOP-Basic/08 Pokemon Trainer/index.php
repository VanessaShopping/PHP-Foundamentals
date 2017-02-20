<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 20-Feb-17
 * Time: 12:01 PM
 */
include "PokemonTrainer.php";

$trainers = [];
while (true) {
    $input = trim(fgets(STDIN));
    if ($input == "Tournament") {
        break;
    }
    $pokemonInfo = explode(" ", $input);
    list($trainerName, $pokemonName, $pokemonElement, $pokemonHealth) =
        [$pokemonInfo[0], $pokemonInfo[1], $pokemonInfo[2], intval($pokemonInfo[3])];
    $pokemon = new Pokemon($pokemonName, $pokemonElement, $pokemonHealth);
    $trainer = new Trainer($trainerName, $pokemon);
    if (array_key_exists($trainerName, $trainers)) {
        $trainers[$trainerName]->addPokemonToCollection($pokemon);
    } else {
        $trainers[$trainerName] = $trainer;
    }
}
while (true) {
    $inputElement = trim(fgets(STDIN));
    if ($inputElement == 'End') {
        break;
    }
    foreach ($trainers as $trainer) {
        $collection = $trainer->getPokemonCollection();
        foreach ($collection as $key => $pokemon) {
            if ($pokemon->getElement() == $inputElement) {
                $trainer->addBadge();
                break;
            } else {
                $pokemon->reduceHealth();
                if ($pokemon->getHealth() <= 0) {
                    array_splice($collection, $key, 1);
                }
            }
        }
        $trainer->setPokemonCollection($collection);
    }
}
usort($trainers, 'orderByNumberOfBadges');
foreach ($trainers as $trainer) {
    echo $trainer->getName() . ' ' . $trainer->getNumberOfBadges() . ' ' . $trainer->getNumberOfPokemon() . PHP_EOL;
}
function orderByNumberOfBadges($t1, $t2)
{
    return $t1->getNumberOfBadges() < $t2->getNumberOfBadges();
}