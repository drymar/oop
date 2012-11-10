<?php

require_once (__DIR__ . '/OOP/autoload.php');

use OOP\PlanetClasses\Earth;
use OOP\PlanetClasses\Jupiter;
use OOP\PlanetClasses\Mars;

$pl1 = new Earth();
$pl1->earth();

$pl2 = new Jupiter();
$pl2->jupiter();

$pl3 = new Mars();
$pl3->mars();