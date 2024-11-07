<?php
include_once "vendor/autoload.php";

use App\Class\Faute;
use App\Class\MatchDeFoot;

$equipeFrance = new \App\Class\Equipe("France", "France");
$equipeCroatie = new \App\Class\Equipe("Croatie", "Croatie");

$entraineurFrance = new \App\Class\Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"), "France");
$entraineurCroatie = new \App\Class\Selectionneur("Dalic", "Zlatko", new DateTime("1967-10-26"), "Croatie");

$stade = new \App\Class\Stade("Luzhniki Arena (Moscou)", "Moscou", 81000);
$arbitre = new \App\Class\Arbitre("Pitana", "Nestor", new DateTime("1975-06-17"), "Argentin");
$match = new MatchDeFoot(new DateTime("2021-06-15 21:00"), "Finale", $equipeFrance, $equipeCroatie, $stade, $arbitre);

$joueur1France = new \App\Class\Joueur("Griezmann", "Antoine", new DateTime("1991-03-21"), 7, $equipeFrance);
$joueur2France = new \App\Class\Joueur("Pogba", "Paul", new DateTime("1993-03-15"), 6, $equipeFrance);
$joueur3France = new \App\Class\Joueur("Mbappe", "Kylian", new DateTime("1998-12-20"), 10, $equipeFrance);
$joueur4France = new \App\Class\Joueur("Lloris", "Hugo", new DateTime("1986-12-26"), 1, $equipeFrance);
$joueur5France = new \App\Class\Joueur("Varane", "Raphael", new DateTime("1993-04-25"), 4, $equipeFrance);
$joueur6France = new \App\Class\Joueur("Kante", "N'Golo", new DateTime("1991-03-29"), 13, $equipeFrance);
$joueur7France = new \App\Class\Joueur("Hernandez", "Lucas", new DateTime("1996-02-14"), 21, $equipeFrance);
$joueur1Croatie = new \App\Class\Joueur("Modric", "Luka", new DateTime("1985-09-09"), 10, $equipeCroatie);
$joueur2Croatie = new \App\Class\Joueur("Perisic", "Ivan", new DateTime("1989-02-02"), 4, $equipeCroatie);
$joueur3Croatie = new \App\Class\Joueur("Mandzukic", "Mario", new DateTime("1986-05-21"), 17, $equipeCroatie);

$match->ajouterEvenement(new \App\Class\But(new DateTime("2021-06-15 21:00"), "Griezmann", $joueur1France, $equipeFrance, true));
$match->ajouterEvenement(new \App\Class\But(new DateTime("2021-06-15 21:00"), "Perisic", $joueur2Croatie, $equipeCroatie, false));
//le carton jaune de kante
$match->ajouterEvenement(new Faute (new DateTime("2021-06-15 21:00"), "Kante", $joueur6France, $joueur1Croatie, true, false));
//le carton rouge de kante
$match->ajouterEvenement(new Faute (new DateTime("2021-06-15 21:00"), "Kante", $joueur6France, $joueur1Croatie, true, true));
//le remplacement de varanne
$match->ajouterEvenement(new \App\Class\But(new DateTime("2021-06-15 21:00"), "Pogba", $joueur2France, $equipeFrance, false));
$match->ajouterEvenement(new \App\Class\But(new DateTime("2021-06-15 21:00"), "Mbappe", $joueur3France, $equipeFrance, false));
$match->ajouterEvenement(new \App\Class\But(new DateTime("2021-06-15 21:00"), "Mandzukic", $joueur3Croatie, $equipeCroatie, false));
$match->ajouterEvenement(new \App\Class\But(new DateTime("2021-06-15 21:00"), "Pogba", $joueur2France, $equipeFrance, false));

echo $match->donneTexte();
