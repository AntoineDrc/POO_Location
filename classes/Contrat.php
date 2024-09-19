<?php 

require_once 'Client.php';
require_once 'Vehicule.php';

// Création d'une classe Contrat
class Contrat 
{
    private Client $client;
    private Vehicule $vehicule;
    private DateTime $dateDebut;
    private DateTime $dateFin;

    // Création du constructeur de la classe contrat
    public function __construct(Client $client, Vehicule $vehicule, string $dateDebut, string $dateFin)
    {
        $this->client = $client;
        $client->addContrat($this);
        $this->vehicule = $vehicule;
        $vehicule->addContrat($this);
        $this->dateDebut = new DateTime($dateDebut);
        $this->dateFin = new DateTime($dateFin);

        if ($this->dateFin < $this->dateDebut)
        {
            echo "La date de fin ne peut pas être antérieur à la date de début";
            return;
        }
    }

    // Création des getters et setters
    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getVehicule()
    {
        return $this->vehicule;
    }

    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = new DateTime($dateDebut);

        return $this;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = new DateTime($dateFin);

        return $this;
    }

    // Méthode pour créer un contrat de location 
    public function createContract()
    {
        if (!$this->vehicule->getDispo())
        {
            return "Le véhicule n'est pas disponible";
        }
        else 
        {
            // Si le véhcule est dispo, ajoute le contrat au client
            $this->client->addContrat($this);

            // Marque le vévhicule comme indisponible
            $this->vehicule->setDispo(false);

            return "Contrat crée avec succès<br>";
        }
    }


    // Méthode pour calculer le prix total de la location
    public function calculerPrix()
    {
        // Calcul du nombre de jours 
        $nbJours = $this->dateDebut->diff($this->dateFin)->days;

        // Nombre de jours * prix / jour
        $resultat = $this->vehicule->getPrixJour() * $nbJours;

        return $resultat;
    }
}



?>
