<?php
/**
 * Created by PhpStorm.
 * User: Esra
 * Date: 19/11/2016
 * Time: 22:13
 */
include_once("../Connexion/context.php");
class Inscription extends context
{
    private $id;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $adresse;
    private $telephone;
    private $nom_personne_confiance;
    private $prenom_personne_confiance;
    private $tel_personne_confiance;
    private $status;

    public function __construct()
    {
        $this->context = $this->connect();
        $this->context = (new context())->connect();
        $this->nom = $_POST["nom"];
        $this->prenom = $_POST["prenom"];
        $this->date_naissance = $_POST["datenaissance"];
        $this->adresse = $_POST["adresse"];
        $this->telephone = $_POST["telephone"];
        $this->nom_personne_confiance = $_POST["nompersconf"];
        $this->prenom_personne_confiance = $_POST["prenompersconf"];
        $this->tel_personne_confiance = $_POST["telpersconf"];
        $this->status = $_POST["status"];
    }



    private function getPatient()
    {
        $this->context->query("SELECT * FROM users WHERE id = " + $this->id);
        //foreach ()
    }


    private function getAlert()
    {

    }

    public function add()
    {
        $addUser =
            $this->context->query(
                "INSERT INTO users(nom, prenom, datenaissance, adresse, telephone, nompersconf, prenompersconf, telpersconf, status)
                  VALUES
                  (
                    "+$this->nom
                +"," + $this->prenom
                +"," + $this->date_naissance
                +"," + $this->adresse
                +"," + $this->telephone
                +"," + $this->nom_personne_confiance
                +"," + $this->prenom_personne_confiance
                +"," + $this->tel_personne_confiance
                +"," + $this->status+
                ")");
        return $addUser;

    }
}