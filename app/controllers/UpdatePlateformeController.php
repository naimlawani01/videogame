<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);


$plateforme = showPlateforme($db, $_GET['plateforme']);
if(isset($_POST['plateforme']) && $_GET['plateforme']){
    $plateformeName = htmlspecialchars($_POST['plateforme']);
    $datas = [
        'nom' =>  $plateformeName,
        'idPlateforme' => $_GET['plateforme']
    ];
    if(updatePlateforme($db, $datas)) $message = "Modification effectuée";
}