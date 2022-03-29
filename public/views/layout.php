<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=SCRIPTS.'css/style.css' ?>">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="dropdown">
            <button><a href="#" class="home">HOME</a></button>
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
        <div id="connectregister">
            <div class="divconnect">
                S'inscire
            </div>
            <div class="divconnect">
                Se Connecter
            </div>
        </div>
    </header>
    <?= $content ?>
</body>
</html>