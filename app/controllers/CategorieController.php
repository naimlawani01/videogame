<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];
$user= getUser($_SESSION['userid'], $db);
$categories = getCategorie($db);