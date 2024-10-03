<?php

namespace App\Class;

class Stade
{

    private string $nom;
    private string $ville;
    private int $capacite;

    public function __construct(string $nom, string $ville, int $capacite)
    {
        $this->nom = $nom;
        $this->ville = $ville;
        $this->capacite = $capacite;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function getCapacite(): int
    {
        return $this->capacite;
    }

    public function donneTexte(): string
    {
        return "Stade : ".$this->getNom()." ".$this->getVille()." ".$this->getCapacite();
    }

}