<?php

namespace App\Class;

use DateTime;

class Arbitre extends Humain
{

    private string $nationnalite ;

    public function __construct(string $nom, string $prenom, datetime $dateNaissance, string $nationnalite)
    {
        parent::__construct($nom, $prenom, $dateNaissance);

        //Construction propre à l'arbitre
        $this->nationnalite = $nationnalite;
    }

    public function getNationnalite(): string
    {
        return $this->nationnalite;
    }


    public function donneTexte():string {
        return "Arbitre : ".$this->getNom()." ".$this->getPrenom()." ".$this->getDateNaissance()->format("d/m/Y");
    }
}