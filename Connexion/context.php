<?php

/**
 * Created by PhpStorm.
 * User: Massil
 * Date: 19/11/2016
 * Time: 21:02
 */
class context
{
    public $bdd;
    private $user = "";
    private $password = "";
    private $database ="hhlyon";

    public function __construct()
    {
        $this->user = "";
        $this->password = "";
        $this->database ="hhlyon";
    }

    public function connect()
    {
        //Tentative de connexion à la base de donnée :
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname='+$this->database+';charset=utf8', $this->user, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        return $this->bdd;
    }

    public function __destruct()
    {
        $this->bdd = null;
    }
}