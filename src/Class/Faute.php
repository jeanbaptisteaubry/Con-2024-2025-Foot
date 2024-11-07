<?php

namespace App\Class;

class Faute extends FaitDeJeu
{

    private Joueur $joueurVictime;

    private bool $cartonJaune = false;
    private bool $cartonRouge = false;

    public function __construct(\DateTime $horaire, string $description, Joueur $joueurAuteur, Joueur $joueurVictime, bool $cartonJaune, bool $cartonRouge)
    {
        parent::__construct($horaire, $description, $joueurAuteur);

        $this->joueurVictime = $joueurVictime;
        $this->cartonJaune = $cartonJaune;
        $this->cartonRouge = $cartonRouge;
    }


    public function isCartonJaune(): bool
    {
        return $this->cartonJaune;
    }

    public function isCartonRouge(): bool
    {
        return $this->cartonRouge;
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
        return "Faute : ".$this->getHoraire()->format("H:i")." ".$this->getDescription()." ".$this->getJoueurAuteur()->donneTexte()." ".$this->joueurVictime->donneTexte()." Jaune ".($this->cartonJaune ? "Oui" : "Non")." Rouge ".($this->cartonRouge ? "Oui" : "Non");
    }

}