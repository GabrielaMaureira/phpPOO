<?php

require("Player.php");
require("Stadistics.php");

$player1 = new Player("Gaby", 18, Position::Defense);
$player2 = new Player("Carla", 21, Position::Goalkeeper);
$player3 = new Player("Andrea", 21, Position::Midfielder);
$player4 = new Player("Laura", 23, Position::Midfielder);
$player5 = new Player("Marina", 34, Position::Striker);
$player6 = new Player("Paula", 17, Position::Defense);
$player7 = new Player("Lucia", 34, Position::Goalkeeper);


$playerList = array();
array_push($playerList, $player1, $player2, $player3, $player4, $player5, $player6);

$stadistics = new Stadistics($playerList);

echo "The player who scores the most goals: " . $stadistics->topScorer() . "\n";
echo "The player who makes the fewest fouls: " . $stadistics->fewerFoulsMade();