<?php

namespace App\Class;

use DateTime;

class Humain
{
    private string $nom;
    private string $prenom;
    private datetime $dateNaissance;

    public function __construct(string $nom, string $prenom, datetime $dateNaissance)
    {
        $this->nom = $nom; //$this->nom : c'est le nom de l'objet en cours, $nom est la propriété du constructeur
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getDateNaissance(): datetime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(datetime $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function donneTexte(): string
    {
        return $this->nom . " " . $this->prenom . " né le  " . $this->dateNaissance->format("d/m/Y");
    }
}