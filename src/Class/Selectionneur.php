<?php

namespace App\Class;

use DateTime;

class Selectionneur extends Humain
{
    private string $nationnalite ;

    private ?Equipe $equipe = null;

    public function __construct(string $nom, string $prenom, datetime $dateNaissance, string $nationnalite)
    {
        parent::__construct($nom, $prenom, $dateNaissance);

        //Construction propre à l'arbitre
        $this->nationnalite = $nationnalite;
    }

    public function getNationnalite(): string
    {
        return $this->nationnalite;
    }

    public function donneTexte():string {
        return "Selectionneur : ".$this->getNom()." ".$this->getPrenom()." ".$this->nationnalite;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $nouvelleEquipe): void
    {
        if($this->equipe != null)
            if($nouvelleEquipe->getSelectionneur() != $this)
            {
                $memoEquipe = $this->equipe;
                $this->equipe = null;
                $memoEquipe->setSelectionneur(null);
            }
        $this->equipe = $nouvelleEquipe;

    }
}