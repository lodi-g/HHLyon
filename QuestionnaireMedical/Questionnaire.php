<?php

/**
 * Created by PhpStorm.
 * User: Massil
 * Date: 19/11/2016
 * Time: 18:13
 */
class Questionnaire
{
    private $_personneId;
    private $_niveauDoubleur;
    private $_typeDoubleur;
    private $_circonstanceDouleur;

    public function __construct()
    {

        $_niveauDouleur = $_POST["niveauDouleur"];
        $_typeDouleur = $_POST["typeDouleur"];
        $_circonstanceDouleur = $_POST["circonstance"];
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
            $addPatient = $db->query("INSERT INTO ");
        }
    }
}