<?php

namespace App\Class;

class Faute extends FaitDeJeu
{

    private Joueur $joueurVictime;

    public function __construct(\DateTime $horaire, string $description, Joueur $joueurAuteur, Joueur $joueurVictime)
    {
        parent::__construct($horaire, $description, $joueurAuteur);

        $this->joueurVictime = $joueurVictime;
    }


    public function getJoueurVictime(): Joueur
    {
        return $this->joueurVictime;
    }

    public function setJoueurVictime(Joueur $joueurVictime): void
    {
        $this->joueurVictime = $joueurVictime;
    }

    public function donneTexte(): string
    {
        return "Faute : ".$this->getHoraire()->format("H:i")." ".$this->getDescription()." ".$this->getJoueurAuteur()->donneTexte()." ".$this->joueurVictime->donneTexte();
    }

}