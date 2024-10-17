<?php

namespace App\Class;

class Equipe
{
    private string $nom;
    private string $pays;

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

    public function donneTexte(): string
    {
        if($this->selectionneur != null){
            return "Equipe : ".$this->nom." ".$this->pays." Selectionneur : ".$this->selectionneur->getNom()." ".$this->selectionneur->getPrenom();
        }
        return "Equipe : ".$this->nom." ".$this->pays;
    }

}