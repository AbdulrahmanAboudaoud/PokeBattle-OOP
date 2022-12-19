<?php
require "pokemon.php";
require "attack.php";
require "resistance.php";
require "weakness.php";
require "pikachu.php";
require "charmeleon.php";

$pikachu = new pikachu();
$charmeleon = new charmeleon();


// if statment om te kijken hoeveel aantal pokemons alive zijn en als niet dan zorgt het voor unsetten 

if($pikachu->get_hitpoints() <= 0){
	unset($pikachu);
	pokemon::$count--;

}


if($charmeleon->get_hitpoints() <= 0){
	unset($charmeleon);
	pokemon::$count--;

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pokemon fight</title>
</head>
<body>

<!-- vs line --> 

<p><?php print_r( $pikachu->getName() . " vs " . $charmeleon->getName()); ?></p>

<!-- het naam en attack naam van een pokemmon op scherm aantonen -->

<p><?php print_r($pikachu->getName() . " attacked " . $charmeleon->getName() . " with " . $pikachu->getAttack()[0]->getAttackName()); ?></p>

<!-- het totaal schade en huidige hp berekenen en op scherm aantonen --> 

<p><?php $pikachu->attack($charmeleon, $pikachu->getAttack()[0]);?></p>




<p><?php print_r( $charmeleon->getName() . " vs " . $pikachu->getName()); ?></p>

<p><?php print_r($charmeleon->getName() . " attacked " . $pikachu->getName() . " with " . $charmeleon->getAttack()[1]->getAttackName()); ?></p>

<p><?php $pikachu->attack($pikachu, $charmeleon->getAttack()[1]);?></p>

<!-- aantal resterende Pokemons op scherm aantonen  -->

<p><?php print_r("pokemons alive :" . pokemon::$count); ?></p>

</body>
</html>