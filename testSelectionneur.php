<?php

use App\Class\Equipe;
use App\Class\Selectionneur;

include_once "vendor/autoload.php";

$equipe = new Equipe("France", "France");
$equipe2 = new Equipe("Croatie", "Croatie");

$selectionneur1 = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"), "Français");

$selectionneur2 = new Selectionneur("Blanc", "Laurent", new DateTime("1965-11-19"), "Français");
echo $equipe->donneTexte()."\n";
$equipe->setSelectionneur($selectionneur2);
echo $equipe->donneTexte()."\n";
$equipe->setSelectionneur($selectionneur1);
echo $equipe->donneTexte()."\n";
$equipe2->setSelectionneur($selectionneur1);
echo $equipe2->donneTexte()."\n";