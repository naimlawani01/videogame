<?php
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet de modifier un jeu
*
* @package NAIM/MARC
* @copyright 2022
*/
if(
    isset($_POST['edition']) && 
    isset($_POST['plateforme']) && 
    isset($_POST['support']) &&
    isset($_POST['etat']) &&
    isset($_POST['prix']) &&
    isset($_GET['id']) &&
    isset($_POST['description'])){
    $edition_id = htmlspecialchars(trim($_POST['edition']));
    $plateforme = htmlspecialchars(trim($_POST['plateforme']));
    $support = htmlspecialchars(trim($_POST['support']));
    $etat = htmlspecialchars(trim($_POST['etat']));
    $prix = htmlspecialchars(trim($_POST['prix']));
    $description = htmlspecialchars(trim($_POST['description']));
    $vendeur_id = $_SESSION['userid'];
    $jeu_id = $_GET['id'];

    if($_SESSION['userid']){;
            $preparedRequest1 = $db->getPDO()->prepare('UPDATE jeu SET etat = :etat, prix = :prix, edition_id = :edition_id, vendeur_id = :vendeur_id, description = :description, plateforme_id = :plateforme_id, support_id = :support_id WHERE jeu.id = :jeu_id');
            $preparedRequest1->bindValue('etat', $etat, PDO::PARAM_STR);
            $preparedRequest1->bindValue('prix', $prix, PDO::PARAM_INT);
            $preparedRequest1->bindValue('edition_id', $edition_id, PDO::PARAM_INT);
            $preparedRequest1->bindValue('vendeur_id', $vendeur_id, PDO::PARAM_INT);
            $preparedRequest1->bindValue('description', $description, PDO::PARAM_STR);
            $preparedRequest1->bindValue('plateforme_id', $plateforme, PDO::PARAM_INT);
            $preparedRequest1->bindValue('support_id', $support, PDO::PARAM_INT);
            $preparedRequest1->bindValue('jeu_id', $jeu_id, PDO::PARAM_INT);
            $preparedRequest1->execute();
            header('Location: dashboard.php');
    } else { $err = true;}
    
}