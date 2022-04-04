<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];
$user= getUser($_SESSION['userid'], $db);
$plateformes = getPlateforme($db);