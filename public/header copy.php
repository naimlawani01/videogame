<?php

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
<header>
    <div class="dropdown">
        <button><a href="index.php" class="home">HOME</a></button>
        <div class="xbox">
            <button >XBOX</button>
            <ul class="liste">
                <li><a href="#">Consoles</a></li>
                <li><a href="#">Jeux PS5</a></li>
                <li><a href="#">Jeux PS4</a></li>
                <li><a href="#">Jeux PS3</a></li>
                <li><a href="#">Cartes PSN</a></li>
            </ul>
        </div>
        <div class="playstation">
            <button>PLAYSTATION</button>
            <ul class="liste">
                <li><a href="#">Consoles</a></li>
                <li><a href="#">Jeux Xbox Series</a></li>
                <li><a href="#">Jeux Xbox One</a></li>
                <li><a href="#">Jeux Xbox 360</a></li>
                <li><a href="#">Cartes Microsoft</a></li>
            </ul>
        </div>
        <div class="nintendo">
            <button>NINTENDO</button>
            <ul class="liste">
                <li><a href="#">Consoles</a></li>
                <li><a href="#">Jeux Nintendo Switch</a></li>
                <li><a href="#">Jeux DS</a></li>
                <li><a href="#">Jeux Wii U</a></li>
            </ul>
        </div>
        <div class="pc">
            <button>PC</button>
            <ul class="liste">
                <li><a href="#">PC Portables</a></li>
                <li><a href="#">Tours</a></li>
                <li><a href="#">Clés PC</a></li>
            </ul>
        </div>
    </div>
    <?php if(isConnected()): ?>
    <div id="connectregister">
        <div class="divconnect">
            <a href="vendeur/dashboard.php"> <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i> <?php $user= getUser($_SESSION['userid'], $db); ?><?=$user['mail']?></a>
        </div>

    </div>
    <?php else: ?>
    <div id="connectregister">
        <div class="divconnect">
        <a href="/register"> S'inscrire</a>
        </div>
        <div class="divconnect">
            <a href="/login">Se Connecter</a> 
        </div>
    </div>
    <?php endif; ?>
</header>