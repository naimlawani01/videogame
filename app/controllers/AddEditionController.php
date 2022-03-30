<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);

$categories = getCategorie($db);

if(isset($_POST['editeur']) && isset($_POST['pegi']) && 
    isset($_POST['categorie']) && isset($_POST['description']) &&
    isset($_FILES['image'])){
        $imageName= $_FILES['image']['name'];
        $imgInfo = pathinfo($imageName);
        $valideExtension = ['jpeg', 'jpg', 'png', 'sql'];
        if(in_array($imgInfo['extension'], $valideExtension)){
            $newImgName= date('Y_m_d');
            echo $newImgName;
        }
    }