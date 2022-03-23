<?php

if(
    isset($_POST['nom']) && 
    isset($_POST['prenom']) && 
    isset($_POST['email']) && 
    isset($_POST['password']) &&
    isset($_POST['confirmpassword'])){
    $nom = $_POST['nom'];

}