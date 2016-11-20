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
    private $sexe;

    public function __construct($niveauDouleur ,$typeDouleur , $circonstance)
    {
        $this->context = (new context())->try_connect();
        $this->niveauDouleur = $niveauDouleur;
        $this->typeDouleur = $typeDouleur;
        $this->circonstanceDouleur = $circonstance;
        $this->personneId = '2';
        $this->sexe="H";
    }

    private function getPatient()
    {
        $res = $this->context->query("SELECT * FROM users WHERE id = " .$this->personneId);
        $this->patient = $res[0];
    }

    public function getAge()
    {
        return 60;
    }


    private function getAlert()
    {
        if($this->getAge() > 50 && $this->sexe == "H")
        {
            if($this->niveauDouleur > 2)
            {
                if(in_array(2 ,  $this->typeDouleur) && in_array(4 ,  $this->typeDouleur))
                {
                    return true;
                }
            }
        }
        else if($this->niveauDouleur > 8 )
        {
            if(in_array(2 ,  $this->typeDouleur) && in_array(4 ,  $this->typeDouleur))
            {
                return true;
            }
        }
        else
            return false;
    }

    public function add()
    {
        $this->getAlert();
        foreach ($this->typeDouleur as $value)
        {
            $addPatient =
                $this->context->query(
                    "INSERT INTO patient
                  (
                    id_douleur 
                    , id_circonstance 
                    , id_user 
                    , echelle 
                    , alerte
                  ) 
                  VALUES 
                  (
                    ". (string)$this->typeDouleur.
                    "," . $this->circonstanceDouleur
                    ."," . $this->personneId
                    ."," . (string)$value
                    ."," . $this->getAlert()
                    .")");
        }

        return $addPatient;

    }
}