<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$editions = geteditions($db);
$user= getUser($_SESSION['userid'], $db);