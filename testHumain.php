<?php

use App\Class\Humain;

include_once "vendor/autoload.php";

$giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));

$nom = $giroud->getNom();
echo "le nom : $nom\n";

$giroud->setNom("Juste Super");
$nom = $giroud->getNom();
echo "le nouveau nom : $nom\n";

echo $giroud->donneTexte();
