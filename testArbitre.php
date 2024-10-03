<?php

include_once "vendor/autoload.php";

use App\Class\Arbitre;

$unArbitre = new Arbitre ("Pitana","Nestor", new DateTime("1975-06-17"), "Argentin");

echo $unArbitre->donneTexte();