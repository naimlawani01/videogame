<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet de recuperer les jeux de l'utilisateur et redirige si l'utilisateur n'est pas connecté
*
* @package NAIM/MARC
* @copyright 2022
*/
if(!isConnected()){
    header('location: index.php');
}
$userid = $_SESSION['userid'];

$inform = getuserinf($db, $userid);
$user = getUser($_SESSION['userid'], $db);


