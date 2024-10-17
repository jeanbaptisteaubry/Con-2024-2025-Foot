<?php

namespace App\Class;

use DateTime;

class Remplacement extends Evenement
{

    private Joueur $joueurSortant;
    private Joueur $joueurEntrant;

    public function __construct(DateTime $horaire, string $description, Joueur $joueurSortant, Joueur $joueurEntrant)
    {
        parent::__construct($horaire, $description);
        $this->joueurSortant = $joueurSortant;
        $this->joueurEntrant = $joueurEntrant;
    }

    public function getJoueurSortant(): Joueur
    {
        return $this->joueurSortant;
    }

    public function setJoueurSortant(Joueur $joueurSortant): void
    {
        $this->joueurSortant = $joueurSortant;
    }

    public function getJoueurEntrant(): Joueur
    {
        return $this->joueurEntrant;
    }

    public function setJoueurEntrant(Joueur $joueurEntrant): void
    {
        $this->joueurEntrant = $joueurEntrant;
    }

    public function donneTexte(): string
    {
        return "Remplacement : ".$this->getHoraire()->format("d/m/Y H:i")." ".$this->getDescription()." ".$this->joueurSortant->donneTexte()." ".$this->joueurEntrant->donneTexte();
    }
}

