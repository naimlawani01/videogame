<?php

require 'header.php';
require('../app/controllers/RegisterController.php');
require('../app/controllers/mailcontroller.php');
    
?>


<h1>Heureux de pouvoir bientôt vous compter parmis nous !</h1>

<?php if($errmail === true) { ?>
    <div id="erreurformulaireC">
        <p style="color: white;">Email non valide</p>
    </div>
<?php }?>
<?php if($errpassword === true) { ?>
    <div id="erreurformulaireC">
        <p style="color: white;">les mots de passe ne correspondent pas</p>
    </div>
<?php }?>
<form action="" id="formulaire" method="post">
    
    <div id="formulaire">

    <div class="test">
        <label for="nomid"></label>
        <input type="text" name="nom" id="nomid" placeholder="Nom" class="champ">
    </div>

    <div>
        <label for="prenomid"></label>
        <input type="text" name="prenom" id="prenomid" placeholder="Prénom" class="champ">
    </div>
    
    
    <div>
        <label for="emailid"></label>
        <input type="email" name="email" id="emailid" placeholder="E-Mail" class="champ">
    </div>

    <div>
        <label for="passwordid"></label>
        <input type="password" name="password" id="passwordid" placeholder="Mot de passe" class="champ">
        </div>

        <div>
        <label for="confirmpasswordid"></label>
        <input type="password" name="confirmpassword" id="confirmpasswordid" placeholder="Confirmez le Mot de passe" class="champ">
        </div>
        <div >
            <input type="submit" value="Créer mon compte" id="submit">
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
