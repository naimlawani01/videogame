<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$games = getSellerGame($userId, $db);
$user= getUser($_SESSION['userid'], $db);


