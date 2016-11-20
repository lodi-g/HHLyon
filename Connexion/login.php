<?php

include_once("context.php");
include_once("Connexion.php");

$token = new Connexion();
$token->connect_user();

/*
if ($token->valid())
{
?>
<script>window.location.href = '../#/accueil';</script>
<?php
}
    //header("Location: ..#/accueil");
else
{
?>
<script>window.location.href = '../#/error';</script>
<?php
}
    //header("Location: ..#/error");
*/
