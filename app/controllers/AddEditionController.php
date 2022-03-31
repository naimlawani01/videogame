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
        $editeur = htmlspecialchars($_POST['editeur']); 
        $pegi = htmlspecialchars($_POST['pegi']);
        $description = htmlspecialchars($_POST['description']);
        $categorie = htmlspecialchars($_POST['categorie']);

        $imageName= $_FILES['image']['name'];
        $imgInfo = pathinfo($imageName);
        $tmpName= $_FILES['image']['tmp_name'];
        $valideExtension = ['jpeg', 'jpg', 'png'];
        if(in_array($imgInfo['extension'], $valideExtension)){
            $newImgName= "../img/upload/".date('Y_m_d').time();
            move_uploaded_file($tmpName, $newImgName);
            $datas = [
                "editeur"=> $editeur, 
                "pegi" => intval($pegi), 
                "img" =>$newImgName, 
                "description" =>$description, 
                "categorie_id" => intval($categorie)

            ];
            if(addEdition($db, $datas)) echo 'Hello';
        }else{
            $error= "Extension Invalide";
        }
    }