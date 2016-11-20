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
    private $date_naissance;

    public function __construct($niveauDouleur ,$typeDouleur , $circonstance)
    {
        $session = Session::getInstance();
        $this->context = (new context())->try_connect();
        $this->niveauDouleur = $niveauDouleur;
        $this->typeDouleur = $typeDouleur;
        $this->circonstanceDouleur = $circonstance;
        $this->personneId = '2';
        $this->sexe=$session->sexe;
        $this->date_naissance = $session->date_naissance;
        
    }

    private function getPatient()
    {
        $res = $this->context->query("SELECT * FROM users WHERE id = " .$this->personneId);
        $this->patient = $res[0];
    }

    public function getAge()

    {
        $arr1 = explode('/', $this->date_naissance);
        $arr2 = explode('/', date('d/m/Y'));

        if (($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
            return $arr2[2] - $arr1[2];

        return $arr2[2] - $arr1[2] - 1;

    }


    private function getAlert()
    {
        if($this->getAge() > 50 && $this->sexe == "H")
        {
            if($this->niveauDouleur > 2)
            {
                if(in_array(2 ,  $this->typeDouleur) && in_array(4 ,  $this->typeDouleur))
                {
                    return 1;
                }
            }
        }
        else if($this->niveauDouleur > 8 )
        {
            if(in_array(2 ,  $this->typeDouleur) && in_array(4 ,  $this->typeDouleur))
            {
                return 1;
            }
        }
        else
            return 0;
    }

    public function add()
    {
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
                    ". $value.
                    "," . $this->circonstanceDouleur
                    ."," . $this->personneId
                    ."," . $this->niveauDouleur
                    ."," . $this->getAlert()
                    .")");
        }

        return $addPatient;

    }
}