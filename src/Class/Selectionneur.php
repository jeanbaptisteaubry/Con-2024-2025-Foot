<?php

namespace App\Class;

use DateTime;

class Selectionneur extends Humain
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
        return "Selectionneur : ".$this->getNom()." ".$this->getPrenom()." ".$this->nationnalite;
    }

}