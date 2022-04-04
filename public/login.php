<?php
session_start();
$title = 'Inscription';


require '../vendor/autoload.php';
require '../app/models/function.php';
use App\Database;
$db = new Database('videogame'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $title?></title>
</head>
<body>
<?php
    require('../app/controllers/LoginController.php');

?>
<a href="index.php"><img style="height: 50px;margin: 0% 3%" src="img/bi_arrow-down-circle.png" alt=""></a>
    <div id="formulaire">
        <h1>Bienvenue de retour parmi nous !</h1>
        <?php if(isset($error) && $error!=null ) { ?>
            <div id="erreurformulaireC">
                <p style="color: white;"><?=$error?></p>
            </div>
        <?php }?>
        
        <form action="" id="formulaire" method="post">
            
            <div id="formulaire">
    
            
            <div>
                <label for="emailid"></label>
                <input type="text" name="email" id="emailid" placeholder="E-Mail" class="champ">
            </div>
    
            <div>
                <label for="passwordid"></label>
                <input type="password" name="password" id="passwordid" placeholder="Mot de passe" class="champ">
                </div>
    
                
                <div >
                    <input type="submit" value="Se Connecter" id="submit">
                </div>
    
            </div>
    
            <div id="ou"> 
                            
                    <div class="squareou"></div>
                    <div id="pou">Ou</div>
                    <div class="squareou"></div>
                
            </div>
            <div id="fbgoogle">
                <div class="squarefbgoogle">
    
                    <img id="imgfb2" src="img/Facebook-logo.png" alt="fb"  >
                    
                </div>
                <div class="squarefbgoogle">
                    <img id="imggl2" src="img/580b57fcd9996e24bc43c51f.png" alt="ggl">
            
                </div>
            </div>
        </form>
        <?php if ($rsl>=1) {?>
        <?php header('Location: index.php'); } ?>
        
   
</body>
</html>