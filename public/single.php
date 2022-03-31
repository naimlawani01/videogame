<?php
    session_start();
    $title = "article";
    require 'header.php'; 
?>
<body style="background-color: white;">
<main style="background-color: white;">
    <div id="dv1a">
        <div id="dvha1"><img style="width: 100%;" src="https://compass-ssl.xbox.com/assets/7f/22/7f223c75-56e3-45d3-8389-96ed6687f62c.jpg?n=299441_GLP-Page-Hero-0_1083x609.jpg" alt=""></div>
        <div id="dvha2">
            <div>
                <h3 style="font-size: 130%;text-align: start;margin: 0px;font-weight:500">MEILLEURE OFFRE !</h3>
                <h2 style="font-size: 300%;margin-bottom: 0px;font-weight:600">Battlefield 2042</h2>
                <p style="font-size: 130%;margin:0px">XBOX Series</p>
                <h1 style="font-family: 'Helvetica';font-size: 480%;margin: 4% 0px;text-align:start">27.99$</h1>
                <p style="font-size: 130%;margin:0px">GamingSlayer</p>
            </div>
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
                <img style="width: 100%;" src="img/Frame 32.png" alt="">
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
                <img style="width: 100%;" src="img/Frame 32.png" alt="">
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
                <img style="width: 100%;" src="img/Frame 32.png" alt="">
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
                <img style="width: 100%;" src="img/Frame 32.png" alt="">
                <button id="butdmp1">Acheter</button>
            </div>
        </div>
    </div>
    <h2 style="font-size: 200%;font-weight:600">Les utilisateurs aiment aussi</h2>
    <div id="aftj">
            <?php  for( $i= 0 ;$i < 4; $i++ ) { ?>
                <div id="card1">
                    <div style="width: 100%;"><img width="100%" src="img/img.png" alt=""></div>
                    <div id="detj">
                        <h4 style="margin: 3%;">Grand Theft Auto</h4>
                        <p style="margin: 0 3%;">A partir de </p>
                    </div>
                    <div id="btnje"><h4 style="margin: 3%;">Voir l'article</h4></div>
                </div>
            <?php }?>
        </div>
</main>
    