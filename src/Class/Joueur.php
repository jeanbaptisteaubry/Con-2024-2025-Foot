<?php

namespace App\Class;

class Joueur extends Humain
{

    private int $numero;

    private ?Equipe $equipe = null;
    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance,  int $numero, Equipe $equipe)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->equipe = $equipe;
        $equipe->ajouterJoueur($this);
        //Construction propre au joueur
        $this->numero = $numero;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function donneTexte(): string
    {
        return "Joueur : ".$this->getNom()." ".$this->getPrenom()." ".$this->numero;
    }

    public function getEquipe(): Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(Equipe $nouvelleEquipe):void
    {
        if($this->equipe != null) {
            if ($nouvelleEquipe != $this->equipe) {
                $memoEquipe = $this->equipe;
                $this->equipe = null;
                $memoEquipe->retirerJoueur($this);
            }
        }
        $this->equipe = $nouvelleEquipe;
    }

}