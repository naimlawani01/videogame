<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet d'ajouter une plateforme
*
* @package NAIM/MARC
* @copyright 2022
*/
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);

$plateformes = getplt($db);

$exist = false;

if(isset($_POST['plateforme'])) {
        $plateforme = htmlspecialchars(trim($_POST['plateforme']));
        foreach ($plateformes as $value) {
            if ($plateforme === $value['nom']) { $exist = true ; $succes = false;}
        };
        if(!$exist){
            $preparedRequest = $db->getPDO()->prepare('INSERT INTO plateforme (nom) VALUES (:nom)');
            $preparedRequest->bindValue('nom', $plateforme, PDO::PARAM_STR);
            $preparedRequest->execute();
            $succes = true;
        }
    }