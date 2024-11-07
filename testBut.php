<?php

include_once "vendor/autoload.php";

$equipeDeFrance = new \App\Class\Equipe("France", "France");
$giroud = new \App\Class\Joueur("Giroud", "Olivier", new DateTime("1986-09-30"), 9, $equipeDeFrance);

$but = new \App\Class\But(new DateTime("2021-06-15 21:00"), "Giroud", $giroud, $equipeDeFrance, false);

echo $but->donneTexte();