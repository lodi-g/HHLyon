<?php
/**
 * Created by PhpStorm.
 * User: Esra
 * Date: 20/11/2016
 * Time: 00:03
 */

include_once ("inscription.php");
echo isset($_POST['']);
$res = new Questionnaire($_POST['nom'],$_POST["prenom"],$_POST["datenaissance"],$_POST["adresse"],$_POST["telephone"],$_POST["nompersconf"],$_POST["prenompersconf"],$_POST["telpersconf"],$_POST["status"]);
$resA = $res->add();
?>