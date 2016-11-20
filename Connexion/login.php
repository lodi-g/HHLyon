<?php

include_once("context.php");
include_once("Connexion.php");

$token = new Connexion();
$token->connect_user();

header("Location: ..#/accueil");
