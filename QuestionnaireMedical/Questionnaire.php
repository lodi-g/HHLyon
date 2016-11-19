<?php

/**
 * Created by PhpStorm.
 * User: Massil
 * Date: 19/11/2016
 * Time: 18:13
 */
class Questionnaire extends context
{
    private $personneId;
    private $niveauDouleur;
    private $typeDouleur;
    private $circonstanceDouleur;
    private $patient;
    public $context;

    public function __construct()
    {
        $this->context = $this->connect();
        $this->context = (new context())->connect();
        $this->niveauDouleur = $_POST["niveauDouleur"];
        $this->typeDouleur = $_POST["typeDouleur"];
        $this->circonstanceDouleur = $_POST["circonstance"];
    }

    private function getPatient()
    {
        $res = $this->context->query("SELECT * FROM users WHERE id = " + $this->personneId);
        $this->patient = $res[0];
    }

    private function getAge()
    {

    }


    private function getAlert()
    {

    }

    public function add()
    {
        $db = new mysqli("hhlyon", "", "");
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        else{
            $addPatient =
                $db->query(
                    "INSERT INTO patient
                      (
                        id_douleur 
                        , id_circonstance 
                        , id_user 
                        , echelle 
                      ) 
                      VALUES 
                      (
                        "+$this->typeDouleur
                        +"," + $this->circonstanceDouleur
                        +"," + $this->personneId
                        +"," + $this->niveauDouleur+
                      ")");
            return $addPatient;
        }
    }
}