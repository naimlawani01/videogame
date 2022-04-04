<?php
    session_start();
    $title = "article";
    require 'header.php'; 
    $jeuid = $_GET['id'];
    $jeux = getjeumarc($db,$jeuid);
    $edition = getedition($db);
?>
<body style="background-color: white;">
<main style="background-color: white;margin-top:50px">
    <div id="dv1a">
        <?php foreach ($jeux as $jeu) { ?>
        <div id="dvha1"><img style="width: 100%;" src="<?= $jeu['img_g'] ?>" alt=""></div>
        <div id="dvha2">
            <div>
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500">MEILLEURE OFFRE !</h3>
                <h2 style="font-size: 300%;margin-bottom: 0px;font-weight:600"><?= $jeu['editeur'] ?></h2>
                <p style="font-size: 130%;margin:0px"><?= $jeu['nom_plateforme'] ?></p>
                <p style="font-size: 130%;margin:0px"><?= $jeu['nom_vendeur'] ?></p>
                <h1 style="font-family: 'Helvetica';font-size: 480%;margin: 4% 0px;text-align:start"><?= $jeu['prix'] ?> €</h1>
            </div>
        <?php } ?>
            <div style="gap: 20px;display:flex;flex-direction:column">
                <button id="butdmp1">Acheter</button>
                <button id="butdmp11">Ajouter au panier</button>
            </div>
        </div>
    </div>
    <h2 style="font-size: 200%;font-weight:600">4 Autres Offres</h2>
    <div style="display: flex;flex-direction:column;gap:10px;">
        <div id="auof">
            <div id="dvsoauf">
                <img style="height: 100%;" src="img/Ellipse 8.png" alt="">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500">DemonLime</h3>
            </div>
            <div id="dvsoauf">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500;display:flex;align-items: center;">29.00$</h3>
                <img style="width: 100%;cursor: pointer;" src="img/Frame 32.png" alt="">
                <button id="butdmp1">Acheter</button>
            </div>
        </div>
        <div id="auof">
            <div id="dvsoauf">
                <img style="height: 100%;" src="img/Ellipse 9.png" alt="">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500">DemonLime</h3>
            </div>
            <div id="dvsoauf">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500;display:flex;align-items: center;">29.00$</h3>
                <img style="width: 100%;cursor: pointer;" src="img/Frame 32.png" alt="">
                <button id="butdmp1">Acheter</button>
            </div>
        </div>
        <div id="auof">
            <div id="dvsoauf">
                <img style="height: 100%;" src="img/Ellipse 10.png" alt="">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500">DemonLime</h3>
            </div>
            <div id="dvsoauf">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500;display:flex;align-items: center;">29.00$</h3>
                <img style="width: 100%;cursor: pointer;" src="img/Frame 32.png" alt="">
                <button id="butdmp1">Acheter</button>
            </div>
        </div>
        <div id="auof">
            <div id="dvsoauf">
                <img style="height: 100%;" src="img/Ellipse 11.png" alt="">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500">DemonLime</h3>
            </div>
            <div id="dvsoauf">
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500;display:flex;align-items: center;">29.00$</h3>
                <img style="width: 100%;cursor: pointer;" src="img/Frame 32.png" alt="">
                <button id="butdmp1">Acheter</button>
            </div>
        </div>
    </div>
    <h2 style="font-size: 200%;font-weight:600">Les utilisateurs aiment aussi</h2>
    <div id="aftj">
            <?php  for( $i= 0 ;$i < 5; $i++ ) { ?>
                <div id="card1">
                    <div style="width: 100%;"><img width="100%" src=<?= $edition[$i]['img_p'] ?> alt=""></div>
                    <div id="detj">
                        <h4 style="margin: 3%;"><?= $edition[$i]['editeur'] ?></h4>
                        <p style="margin: 0 3%;"><?php echo substr($edition[$i]['description'], 0, 45).'...'; ?></p>
                    </div>
                    <a href="archive_edition.php?id=<?= $edition[$i]['id']?>"><div id="btnje"><h4 style="margin: 3%;">Voir l'article</h4></div></a>
                </div>
            <?php }?>
        </div>
</main>
    