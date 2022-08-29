<?php
require "pokemon.php";
require "attack.php";
require "resistance.php";
require "weakness.php";
require "pikachu.php";
require "charmeleon.php";

$pikachu = new pikachu();
$charmeleon = new charmeleon();

$pikachu->attack($charmeleon, $pikachu->getAttack()[0]);
$charmeleon->attack($pikachu, $charmeleon->getAttack()[1]);


if($pikachu->get_hitpoints() <= 0){
	unset($pikachu);
	pokemon::$count--;

}


if($charmeleon->get_hitpoints() <= 0){
	unset($charmeleon);
	pokemon::$count--;

}

print_r("pokemons alive :" . pokemon::$count);





?>