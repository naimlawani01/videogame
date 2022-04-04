<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet de modifier un support et redirige si l'utilisateur n'est pas connecté
*
* @package NAIM/MARC
* @copyright 2022
*/
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);


$support = showSupport($db, $_GET['support']);

if(isset($_POST['support']) && $_GET['support']){
    $plateformeName = htmlspecialchars($_POST['support']);
    $datas = [
        'nom' =>  $plateformeName,
        'idSupport' => $_GET['support']
    ];
    var_dump(updateSupport($db, $datas));
    if(updateSupport($db, $datas)) $message = "Modification effectuée";
}