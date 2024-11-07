<?php

namespace App\Class;

class Joueur extends Humain
{

    private int $numero;

    private ?Equipe $equipe = null;
    public function __construct(string $nom, string $prenom, \DateTime $dateNaissance,  int $numero, Equipe $equipe)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        if($nom == "")
            throw new \Exception("Le nom du joueur ne peut pas être vide");
        if($prenom == "")
            throw new \Exception("Le prénom du joueur ne peut pas être vide");
        if($dateNaissance > new \DateTime())
            throw new \Exception("La date de naissance ne peut pas être dans le futur");
        if($numero < 0)
            throw new \Exception("Le numéro du joueur ne peut pas être négatif");
        if($numero > 27)
            throw new \Exception("Le numéro du joueur ne peut pas être supérieur à 27");
        if($equipe == null)
            throw new \Exception("Le joueur doit appartenir à une équipe");

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