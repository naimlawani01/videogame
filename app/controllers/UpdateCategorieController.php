<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet de modifier une categorie et redirige si l'utilisateur n'est pas connecté
*
* @package NAIM/MARC
* @copyright 2022
*/
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);


$categorie = showCategorie($db, $_GET['categorie']);

if(isset($_POST['categorie']) && $_GET['categorie']){
    $categorieName = htmlspecialchars($_POST['categorie']);
    $datas = [
        'categorie' =>  $categorieName,
        'idCategorie' => $_GET['categorie']
    ];
    if(updateCategorie($db, $datas)) $message = "Modification effectuée";
}
