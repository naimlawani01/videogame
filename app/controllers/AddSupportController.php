<?php 

if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);

$supports = getsupt($db);

$exist = false;

if(isset($_POST['support'])) {
        $support = htmlspecialchars(trim($_POST['support']));
        foreach ($supports as $value) {
            if ($support === $value['nom']) { $exist = true ; $succes = false;}
        };
        if(!$exist){
            $preparedRequest = $db->getPDO()->prepare('INSERT INTO support (nom) VALUES (:nom)');
            $preparedRequest->bindValue('nom', $support, PDO::PARAM_STR);
            $preparedRequest->execute();
            $succes = true;
        }
    }