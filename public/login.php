<?php
    require ('../vendor/autoload.php');
    require('../app/controllers/logcontroller.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="formulaire">
        <h1>Bienvenue de retour parmis nous !</h1>
        <?php if($rsl === 0 && $rslmail === 0 && isset($_POST['email']) ) { ?>
            <div id="erreurformulaireC">
                <p style="color: white;">Email non valide</p>
            </div>
        <?php }?>

        <?php if($rsl === 0 && $rslmail >= 1 && isset($_POST['email']) ) { ?>
            <div id="erreurformulaireC">
                <p style="color: white;">mots de passe non valide</p>
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
    
                    <img id="imgfb2" src="img/
                    Facebook-logo.png" alt="fb"  >
                    
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