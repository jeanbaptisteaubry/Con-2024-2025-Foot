<?php

namespace App\Class;

class Joueur extends Humain
{

    private int $numero;

    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance,  int $numero)
    {
        parent::__construct($nom, $prenom, $dateNaissance);

        //Construction propre au joueur
        $this->numero = $numero;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function donneTexte(): string
    {
        return "Joueur : ".$this->getNom()." ".$this->getPrenom()." ".$this->numero;
    }

}