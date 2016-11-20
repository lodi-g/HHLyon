<?php

/**
 * Created by PhpStorm.
 * User: Massil
 * Date: 19/11/2016
 * Time: 18:13
 */
include_once("../Connexion/context.php");

class Questionnaire extends context
{
    private $personneId;
    private $niveauDouleur;
    private $typeDouleur;
    private $circonstanceDouleur;
    private $patient;
    private $context;

    public function __construct($niveauDouleur ,$typeDouleur , $circonstance)
    {
        $this->context = (new context())->try_connect();
        $this->niveauDouleur = $niveauDouleur;
        $this->typeDouleur = $typeDouleur;
        $this->circonstanceDouleur = $circonstance;
        $this->personneId = '1';
    }

    private function getPatient()
    {
        $res = $this->context->query("SELECT * FROM users WHERE id = " .$this->personneId);
        $this->patient = $res[0];
    }

    public function getAge($date_naissance)

    {
        $arr1 = explode('/', $date_naissance);
        $arr2 = explode('/', date('d/m/Y'));

        if (($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
            return $arr2[2] - $arr1[2];

        return $arr2[2] - $arr1[2] - 1;

    }

// Petit exemple
        $ma_date_de_naissance = select date_naissance from users where id = ;
        $mon_age = Age($ma_date_de_naissance);

        echo $mon_age;


    private function getAlert()
    {

    }

    public function add()
    {
        echo "Numero personne";
        $message = "Message";
        echo $message;
        echo "Fin numero personne";
        $addPatient = true;
            /*$this->context->query(
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
                  ")");*/
        return $addPatient;

    }
}