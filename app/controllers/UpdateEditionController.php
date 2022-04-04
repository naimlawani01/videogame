<?php 
if(!isConnected()){
    header('location: index.php');
}
$userId = $_SESSION['userid'];

$user= getUser($_SESSION['userid'], $db);

$categories = getCategorie($db);
$edition = showEdition($db, $_GET['edition']);

if(isset($_POST['editeur']) && isset($_POST['pegi']) && 
    isset($_POST['categorie']) && isset($_POST['description']) &&
    isset($_FILES['image_p']) && isset($_FILES['image_g'])){
        
        $editeur = htmlspecialchars($_POST['editeur']); 
        $pegi = htmlspecialchars($_POST['pegi']);
        $description = htmlspecialchars($_POST['description']);
        $categorie = htmlspecialchars($_POST['categorie']);

        var_dump($_FILES['image_p']);
        if(!empty($_FILES['image_p']['name']) && !empty($_FILES['image_g']['name'])){
            $imageName_p= $_FILES['image_p']['name'];
            $imgInfo_p = pathinfo($imageName_p);
            $tmpName_p= $_FILES['image_p']['tmp_name'];
    
            $imageName_g= $_FILES['image_g']['name'];
            $imgInfo_g = pathinfo($imageName_g);
            $tmpName_g = $_FILES['image_g']['tmp_name'];
            $valideExtension = ['jpeg', 'jpg', 'png'];
            if(in_array($imgInfo_p['extension'], $valideExtension) && in_array($imgInfo_g['extension'], $valideExtension)){
                $newImgName_p= "../img/upload/".date('Y_m_d').time().'1.'.$imgInfo_p['extension'];
                $newImgName_g= "../img/upload/".date('Y_m_d').time().'2.'.$imgInfo_g['extension'];
                move_uploaded_file($tmpName_p, $newImgName_p);
                move_uploaded_file($tmpName_g, $newImgName_g);
                $datas = [
                    "editeur"=> $editeur, 
                    "pegi" => intval($pegi), 
                    "img_p" =>$newImgName_p, 
                    "description" =>$description,
                    "img_g" =>$newImgName_g,
                    "categorie_id" => intval($categorie)
        
                ];
                if(updateEdition($db, $datas)) $message = "Modification effectuée";
            }else{
                $message= "Extension Invalide";
            }
        }else{
            $newImgName_p = $edition['img_p'];
            $newImgName_g = $edition['img_g'];
            $datas = [
                "editeur"=> $editeur, 
                "pegi" => intval($pegi), 
                "img_p" =>$newImgName_p, 
                "description" =>$description,
                "img_g" =>$newImgName_g,
                "categorie_id" => intval($categorie),
                "idEdition" => $_GET['edition']
    
            ];
                
            if(updateEdition($db, $datas)) $message = "Modification effectuée";
        }

        
        
}
