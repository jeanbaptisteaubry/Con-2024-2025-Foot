<?php

namespace App\Class;

class FaitDeJeu extends Evenement
{
    private Joueur $joueurAuteur;

    public function __construct(\DateTime $horaire, string $description, Joueur $joueurAuteur )
    {
        parent::__construct($horaire, $description);
        $this->joueurAuteur = $joueurAuteur;
    }

    public function getJoueurAuteur(): Joueur
    {
        return $this->joueurAuteur;
    }

    public function setJoueur(Joueur $joueurAuteur): void
    {
        $this->joueurAuteur = $joueurAuteur;
    }


    public function donneTexte(): string
    {
        return "Fait de jeu : ".$this->getHoraire()->format("H:i")." ".$this->getDescription()." ".$this->joueurAuteur->donneTexte();
    }

}