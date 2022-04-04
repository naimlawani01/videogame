<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);


$support = showSupport($db, $_GET['support']);

if(isset($_POST['support']) && $_GET['support']){
    $plateformeName = htmlspecialchars($_POST['support']);
    $datas = [
        'nom' =>  $plateformeName,
        'idSupport' => $_GET['support']
    ];
    var_dump(updateSupport($db, $datas));
    if(updateSupport($db, $datas)) $message = "Modification effectuée";
}