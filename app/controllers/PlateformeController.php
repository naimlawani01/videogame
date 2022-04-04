<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet de recuperer les platformes et redirige si l'utilisateur n'est pas connecté
*
* @package NAIM/MARC
* @copyright 2022
*/
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];
$user= getUser($_SESSION['userid'], $db);
$plateformes = getPlateforme($db);