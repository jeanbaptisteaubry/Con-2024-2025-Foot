<?php

namespace App\Class;

class But extends FaitDeJeu
{

   private Equipe $EquipeProfit;
 private bool $penalty;
    public function __construct(\DateTime $horaire, string $description, Joueur $joueurAuteur, Equipe $equipeProfit, bool $penalty)
    {
        parent::__construct($horaire, $description, $joueurAuteur);
        $this->EquipeProfit = $equipeProfit;
        $this->penalty = $penalty;
    }

    public function isPenalty(): bool
    {
        return $this->penalty;
    }

    public function getEquipeProfit(): Equipe
    {
        return $this->EquipeProfit;
    }

    public function setPenalty(bool $penalty): void
    {
        $this->penalty = $penalty;
    }

    public function donneTexte(): string
    {
        return "But ! ".$this->getHoraire()->format("H:i")." ".$this->getJoueurAuteur()->getNom()." ".$this->EquipeProfit->getNom()." ".($this->penalty ? "sur penalty" : "");
    }
}
