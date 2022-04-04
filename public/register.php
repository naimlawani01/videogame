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
<header style="background-color: #f7f7f7;">
    <div id="navpp">
        <div id="navha">
            <div id="navhaform">
                <form action="" method="get" style="width: 100%;display: flex;height: 52px;">
                    <input style="width: 100%;margin: 0px;border: none;background-color: #EDEDED;" type="text">
                    <button style="height: 100%;margin: 0px;border: none;background-color: #D2D2D2;" type="submit"><img src="img/akar-icons_search.png" alt=""></button>
                </form>
            </div>
            <div style="padding: 1%;">
                <?php if(isConnected()): ?>
                    <a href="vendeur/dashboard.php"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
                <?php else: ?>
                    <a href="/register"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
                <?php endif; ?>
                <img style="height: 100%;" src="img/noun-buy-4716653 3.png" alt="">
                <img style="height: 100%;" src="img/noun-heart-4714219 1.png" alt="">
            </div>
        </div>
        <div style="margin: 2% 0px;">
            <ul style="list-style: none;display:flex;gap:2%">
                <a href="index.php"><li>Home</li></a>
                <a href="archive.php?plateforme=Xbox"><li>Xbox</li></a>
                <a href="archive.php?plateforme=Playstation"><li>Playstation</li></a>
                <a href="archive.php?plateforme=Pc"><li>Pc</li></a>
                <a href="archive.php?plateforme=Nintendo"><li>Nintendo</li></a>
            </ul>
        </div>
    </div>
    <div id="navmob">
        <div id="navhaform">
            <form action="" method="get" style="width: 100%;display: flex;height: 52px;">
                <input style="width: 100%;margin: 0px;border: none;background-color: #EDEDED;" type="text">
                <button style="height: 100%;margin: 0px;border: none;background-color: #D2D2D2;" type="submit"><img src="img/akar-icons_search.png" alt=""></button>
            </form>
        <?php if(isConnected()): ?>
            <a href="vendeur/dashboard.php"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
        <?php else: ?>
            <a href="/register"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
        <?php endif; ?>
        </div>
        <div style="margin: 2% 0px;">
            <ul style="list-style: none;display:flex;gap:2%">
                <a href="index.php"><li>Home</li></a>
                <a href="archive.php?plateforme=Xbox"><li>Xbox</li></a>
                <a href="archive.php?plateforme=Playstation"><li>Playstation</li></a>
                <a href="archive.php?plateforme=Pc"><li>Pc</li></a>
                <a href="archive.php?plateforme=Nintendo"><li>Nintendo</li></a>
            </ul>
        </div>
    </div>
</header>
<?php
require('../app/controllers/RegisterController.php');
    
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
            <select name="role" id="roleis">
                <option value="1">Client</option>
                <option value="2">vendeur</option>
            </select>
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
