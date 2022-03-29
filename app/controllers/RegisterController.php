<?php

$errmail = false;
$errpassword = false;

if(
    isset($_POST['nom']) && 
    isset($_POST['prenom']) && 
    isset($_POST['email']) &&
    isset($_POST['role']) &&
    isset($_POST['password']) &&
    isset($_POST['confirmpassword'])){
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $role = htmlspecialchars(trim($_POST['role']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirmpassword = htmlspecialchars(trim($_POST['confirmpassword']));
    $emailExit = mailExit($email, $db);
    if($emailExit){
        $errmail = true;
    }


    if(filter_var($email, FILTER_VALIDATE_EMAIL) && $errmail === false){
        if($password === $confirmpassword){
            if(strlen($password)>8){
                $password = sha1($password);
                $preparedRequest = $db->getPDO()->prepare('INSERT INTO utilisateur (nom, prenom, mail, password, role_id) VALUES (:nom, :prenom, :mail, :password, :role_id)');
                $preparedRequest->bindValue('nom', $nom, PDO::PARAM_STR);
                $preparedRequest->bindValue('prenom', $prenom, PDO::PARAM_STR);
                $preparedRequest->bindValue('mail', $email, PDO::PARAM_STR);
                $preparedRequest->bindValue('password', $password, PDO::PARAM_STR);
                $preparedRequest->bindValue('role_id', $role, PDO::PARAM_INT);
                $preparedRequest->execute();
                $errmail === false;
            }
        } else { $errpassword = true;}
    }
}