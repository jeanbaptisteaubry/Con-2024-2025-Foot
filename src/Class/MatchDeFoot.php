<?php

namespace App\Class;

use DateTime;

class MatchDeFoot
{
    private int $scoreDomicile;
    private int $scoreExterieur;
    private dateTime $horaire;
    private string $description;

    private Equipe $equipeDomicile;
    private Equipe $equipeExterieur;
    private Stade $stadeMatch;
    private Arbitre $arbitrer;

    private $evenements = [];

    public function __construct(dateTime $horaire, string $description, Equipe $equipeDomicile, Equipe $equipeExterieur, Stade $stadeMatch, Arbitre $arbitrer)
    {
        $this->scoreDomicile = 0;
        $this->scoreExterieur = 0;
        $this->horaire = $horaire;
        $this->description = $description;
        $this->equipeDomicile = $equipeDomicile;
        $this->equipeExterieur = $equipeExterieur;
        $this->stadeMatch = $stadeMatch;
        $this->arbitrer = $arbitrer;
        $this->evenements = [];
    }

    private function getScoreDomicile(): int
    {
        return $this->scoreDomicile;
    }

    private function getScoreExterieur(): int
    {
        return $this->scoreExterieur;
    }

    private function getEquipeDomicile(): Equipe
    {
        return $this->equipeDomicile;
    }

    private function getEquipeExterieur(): Equipe
    {
        return $this->equipeExterieur;
    }

    public function getStadeMatch(): Stade
    {
        return $this->stadeMatch;
    }

    public function getArbitrer(): Arbitre
    {
        return $this->arbitrer;
    }

    public function getEvenements(): array{
        return $this->evenements;
}

public function ajouterEvenement(Evenement $evenement ): void
{
    $this->evenements[] = $evenement;
    //si l'évènement est un but...
    if($evenement instanceof But){
        //...on incrémente le score de l'équipe qui a marqué
        if($evenement->getEquipeProfit() == $this->equipeDomicile){
            $this->scoreDomicile++;
        }else{
            $this->scoreExterieur++;
        }
    }
}
public function donneTexte():string
{
    $texte = "Match : ".$this->horaire->format("d/m/Y H:i")." ".$this->description." ".$this->equipeDomicile->getNom()." ".$this->scoreDomicile." - ".$this->scoreExterieur." ".$this->equipeExterieur->getNom()." ".$this->stadeMatch->getNom()." ".$this->arbitrer->donneTexte();
    foreach($this->evenements as $evenement){
        $texte .= "\n".$evenement->donneTexte();
    }
    return $texte;
}


}