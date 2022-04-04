<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet d'ajouter une categorie
*
* @package NAIM/MARC
* @copyright 2022
*/
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);

$categories = getCategorie($db);

$exist = false;

if(isset($_POST['categorie'])) {
        $categorie= htmlspecialchars(trim($_POST['categorie']));
        foreach ($categories as $value) {
            if ($categorie === $value['categorie']) { $exist = true ; $succes = false;}
        };
        if(!$exist){
            $preparedRequest = $db->getPDO()->prepare('INSERT INTO categorie (categorie) VALUES (:categorie)');
            $preparedRequest->bindValue('categorie', $categorie, PDO::PARAM_STR);
            $preparedRequest->execute();
            $succes = true;
        }
    }