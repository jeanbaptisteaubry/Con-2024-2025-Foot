<?php

use App\Class\Equipe;
use App\Class\Joueur;
use App\Class\Selectionneur;

include_once "vendor/autoload.php";
$equipe1 = new Equipe("France", "France");
$selectionneur1 = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"), "Français");

$equipe1->setSelectionneur($selectionneur1);
$joueur1 = new Joueur("Griezmann", "Antoine", new DateTime("1991-03-21"), 7, $equipe1);
$joueur2 = new Joueur("Pogba", "Paul", new DateTime("1993-03-15"), 6, $equipe1);
$joueur3 = new Joueur("Mbappé", "Kylian", new DateTime("1998-12-20"), 10, $equipe1);
$joueur4 = new Joueur("Olivier", "Giroud", new DateTime("1986-09-30"), 9, $equipe1);

$equipe2 = new Equipe("Espagne", "Espagne");
$joueur5 = new Joueur("Aymeric", "Laporte", new DateTime("1994-05-27"), 3, $equipe1);

echo "\n".$equipe1->donneTexte();
echo "\ntraitrise \n";
$equipe2->ajouterJoueur($joueur5);
echo "\n".$equipe1->donneTexte();
echo "\n".$equipe2->donneTexte();