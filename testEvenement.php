<?php

use App\Class\Equipe;
use App\Class\Evenement;
use App\Class\FaitDeJeu;
use App\Class\Faute;
use App\Class\Joueur;
use App\Class\Remplacement;

include_once "vendor/autoload.php";

$evenement = new Evenement(new DateTime("00:00"), "Début du match");

echo $evenement->donneTexte()."\n";
$equipe1 = new Equipe("France", "France");
$joueur1 = new Joueur("Griezmann", "Antoine", new DateTime("1991-03-21"), 7, $equipe1);
$joueur2 = new Joueur("Pogba", "Paul", new DateTime("1993-03-15"), 6, $equipe1);

$remplacement = new Remplacement(new DateTime("00:10"), "Sortie de Griezmann, entrée de Pogba", $joueur1, $joueur2);

echo $remplacement->donneTexte()."\n";

$faitDeJeu = new FaitDeJeu(new DateTime("00:15"), "Hors jeu de Griezmann", $joueur1);

echo $faitDeJeu->donneTexte()."\n";

$faute = new Faute(new DateTime("00:20"), "Faute de Pogba sur Griezmann", $joueur2, $joueur1);
echo $faute->donneTexte()."\n";
