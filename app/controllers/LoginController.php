<?php 
/**
* Ce fichier fait partie du projet VIDEOGAME.
*
* Permet de se connecter
*
* @package NAIM/MARC
* @copyright 2022
*/
$rsl=0;
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $user = userExit($email, $password, $db);
    if($user){
        $_SESSION['userid']= $user['id'];
        
        header('location: index.php');
    }else{
        $error = "Non d'utilisateur ou mot de passe incorect";
    }

}
    
