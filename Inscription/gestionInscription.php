<?php
/**
 * Created by PhpStorm.
 * User: Esra
 * Date: 20/11/2016
 * Time: 00:03
 */

include_once ("inscription.php");
echo isset($_POST['nom']);
$res = new Inscription($_POST['nom'],$_POST["prenom"],$_POST["date_naissance"],$_POST["adresse"],$_POST["telephone"],$_POST["nom_personne_confiance"],$_POST["prenom_personne_confiance"],$_POST["tel_personne_confiance"]);
$resA = $res->add();

?>