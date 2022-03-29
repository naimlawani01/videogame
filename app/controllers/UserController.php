<?php

use App\Database;

require (__DIR__. DIRECTORY_SEPARATOR.'mailcontroller.php');

$pdo = new PDO('mysql:host=localhost;dbname=videogame', 'root', '');

$errmail = false;
$errpassword = false;

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


    foreach($result as $produit){
        if ($email === $produit['mail']){
            $errmail = true;
            break;
        }
    };


    if(filter_var($email, FILTER_VALIDATE_EMAIL) && $errmail === false){
        if($password === $confirmpassword){
            if(strlen($password)>8){
                $password = sha1($password);
                $preparedRequest = $pdo->prepare('INSERT INTO utilisateur (nom, prenom, mail, password, role_id) VALUES (:nom, :prenom, :mail, :password, :role_id)');
                $preparedRequest->bindValue('nom', $nom, PDO::PARAM_STR);
                $preparedRequest->bindValue('prenom', $prenom, PDO::PARAM_STR);
                $preparedRequest->bindValue('mail', $email, PDO::PARAM_STR);
                $preparedRequest->bindValue('password', $password, PDO::PARAM_STR);
                $preparedRequest->bindValue('role_id', 1, PDO::PARAM_INT);
                $preparedRequest->execute(
                );$errmail === false;
            }
        } else { $errpassword = true;}
    }
}