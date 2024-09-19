<h1>Exercice POO : gestionnaire de location de voitures</h1>

<p>
Vous devez conceptualiser une gestion de contrat de location de voitures pour des clients.
Un client est identifié par un nom, un prénom, une adresse email et un numéro de téléphone
Un véhicule est caractérisé par une marque, un modèle, une immatriculation ainsi qu'une 
disponibilité. Un client devra pouvoir louer un véhicule sur une période donnée (date début / date 
de fin). Le prix de la location est fixe pour la période.
On doit pouvoir afficher la liste des contrats d'un client ainsi que le prix total de chacune de ces 
locations.
Bonus : on ne doit pas pouvoir louer un véhicule qui n'est pas disponible et on ne peut pas pouvoir 
avoir une date de fin antérieure à une date de début.
</p>

<?php 

// Charge les Classes des autres scripts
spl_autoload_register(function ($class_name)
{
    require_once 'classes/' . $class_name . ".php";
});

// Instanciation des objets
$vehicule1 = new Vehicule("Volkswagen", "Eos", "149BBJ67", 70);

$client1 = new Client("Laudri", "Jerôme", "j.laudri@hotmail.com", "0659894512");


$contrat = new Contrat($client1, $vehicule1, "18-09-2020" , "20-09-2020");
$contrat2 = new Contrat($client1, $vehicule1, "21-09-2020", "23-09-2020");


echo $contrat->createContract() . "<br>";


foreach ($client1->getContrats() as $contrat)
{
    echo "Véhicule loué : " . $contrat->getVehicule()->getMarque() . " " . $contrat->getVehicule()->getModele() . "<br>";
    echo "du : " . $contrat->getDateDebut()->format('Y-m-d') . "<br>";
    echo "au : " . $contrat->getDateFin()->format('Y-m-d') . "<br>";
    echo "Pour un montant total de : " . $contrat->calculerPrix() . " €";
}

echo $vehicule1->getDispo();
?>
