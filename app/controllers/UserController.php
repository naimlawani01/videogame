<?php

if(
    isset($_POST['nom']) && 
    isset($_POST['prenom']) && 
    isset($_POST['email']) && 
    isset($_POST['password']) &&
    isset($_POST['confirmpassword'])){
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirmpassword = htmlspecialchars(trim($_POST['confirmpassword']));
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        if($password === $confirmpassword){
            if(strlen($password)>8){
                $password = sha1($password);
                adduser($nom,$prenom,$email,$password);
            }
        }
    }
}