<?php

include_once "vendor/autoload.php";

use App\Class\Arbitre;
use App\Class\Joueur;
use App\Class\Selectionneur;
use App\Class\Stade;

$unArbitre = new Arbitre ("Pitana","Nestor", new DateTime("1975-06-17"), "Argentin");

echo $unArbitre->donneTexte();

$stade = new Stade ("Luzhniki Arena (Moscou)","Moscou", 81000);
echo "\n".$stade->donneTexte();

$selectionneur = new Selectionneur ("Deschamps","Didier", new DateTime("1968-10-15"), "Français");
echo "\n".$selectionneur->donneTexte();

$joueur = new Joueur ("Griezmann","Antoine", new DateTime("1991-03-21"), 7);
echo "\n".$joueur->donneTexte();
