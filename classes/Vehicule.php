<?php 

// Création d'une classe Vehicule
class Vehicule
{
    private string $marque;
    private string $modele;
    private string $immat;
    private int $prixJour;
    private bool $dispo;
    private array $contrats = [];

    // Constructeur de la classe Vehicule 
    public function __construct(string $marque, string $modele, string $immat, int $prixJour, bool $dispo = true)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->immat = $immat;
        $this->prixJour = $prixJour;
        $this->dispo = $dispo;
        $this->contrats = [];
    }

    // Création des getters et setters
    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    public function getImmat()
    {
        return $this->immat;
    }

    public function setImmat($immat)
    {
        $this->immat = $immat;

        return $this;
    }

    public function getDispo()
    {
        return $this->dispo;
    }

    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }


    public function getPrixJour()
    {
        return $this->prixJour;
    }

    public function setPrixJour($prixJour)
    {
        $this->prixJour = $prixJour;

        return $this;
    }

    // Méthode pour ajouter un contrat 
    public function addContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }
}


?>
