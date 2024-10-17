<?php

namespace App\Class;

use DateTime;

class Evenement
{
    private DateTime $horaire;
    private string $description;

    public function __construct(DateTime $horaire, string $description)
    {
        $this->horaire = $horaire;
        $this->description = $description;
    }

    public function getHoraire(): DateTime
    {
        return $this->horaire;
    }

    public function setHoraire(DateTime $horaire): void
    {
        $this->horaire = $horaire;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function donneTexte(): string
    {
        return "Evenement : ".$this->getHoraire()->format("d/m/Y H:i")." ".$this->getDescription();
    }
}