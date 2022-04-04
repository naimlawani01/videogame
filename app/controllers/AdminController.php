<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet de verifier si l'utilisateur est un admin
*
* @package NAIM/MARC
* @copyright 2022
*/
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$editions = geteditions($db);
$user= getUser($_SESSION['userid'], $db);