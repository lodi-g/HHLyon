<?php
/**
 * Created by PhpStorm.
 * User: Massil
 * Date: 19/11/2016
 * Time: 18:12
 */

    include_once ("Questionnaire.php");

    $res = new Questionnaire($_POST['niveauDouleur'],$_POST["typeDouleur"],$_POST["circonstance"]);
    $resA = $res->add();
?>