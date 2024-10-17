<?php

namespace App\Class;

class Equipe
{
    private string $nom;
    private string $pays;

    private $joueurs = [];
    private ?Selectionneur $selectionneur = null;
    public function __construct(string $nom, string $pays)
    {
        $this->nom = $nom;
        $this->pays = $pays;
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function getSelectionneur(): ?Selectionneur
    {
        return $this->selectionneur;
    }

    public function setSelectionneur(?Selectionneur $nouveauSelectionneur): void
    {
        if($this->selectionneur != null){
            if($nouveauSelectionneur->getEquipe() != $this) {
                $memoSelectionneur = $this->selectionneur;
                $this->selectionneur = null;
                $memoSelectionneur->setEquipe(null);
            }
        }
        $this->selectionneur = $nouveauSelectionneur;
    }

    public function getJoueurs() : array
    {
        return $this->joueurs;
    }

    public function ajouterJoueur(Joueur $joueur): void
    {
        $this->joueurs[] = $joueur;
        if($joueur->getEquipe() != $this)
            $joueur->getEquipe()->retirerJoueur($joueur);
        $joueur->setEquipe($this);
    }

    public function retirerJoueur(Joueur $joueur): void
    {
        if(in_array($joueur, $this->joueurs)){
            unset($this->joueurs[array_search($joueur, $this->joueurs)]);
        }
    }

    public function donneTexte(): string
    {
        $str = "Equipe : ".$this->nom." ".$this->pays;
        if($this->selectionneur != null){
            $str.="\n*** Selectionneur : ".$this->selectionneur->getNom()." ".$this->selectionneur->getPrenom();
        }
        if(count($this->joueurs) > 0){
            $str.="\n*** Joueurs : ";
            foreach($this->joueurs as $joueur){
                $str.="\n     ".$joueur->donneTexte();
            }
        }
        return $str;
    }

}