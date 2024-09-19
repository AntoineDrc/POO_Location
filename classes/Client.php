<?php 

// Création d'une classe Client
class Client
{
    private string $nom;
    private string $prenom;
    private string $mail;
    private string $tel;

    // Attribut pour stocker les contrats
    private array $contrats = [];
    
    
    // Constructeur de la classe Client
    public function __construct(string $nom, string $prenom, string $mail, string $tel)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->contrats = [];
    }
    
    // Création des getters et setters
    public function getNom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    public function getContrats()
    {
        return $this->contrats;
    }

    // Méthode pour ajouter un contrat 
    public function addContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }
}






?>
