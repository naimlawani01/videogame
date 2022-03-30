<?php
    session_start();
    $title = "home";
    require 'header.php'; 

?>
<body style="background-color: #FFFFFF;">
<main style="background-color:#FFFFFF;margin: 0 10%">
    <div id="dvhh">
        <div>
            <h1>Deviens membre de notre communauté !</h1>
            <h3>Inscris toi pour pouvoir commencer à vendre tes premiers Jeux Vidéos ou Consoles</h3>
        </div>
        <button id="butdm">Devenir vendeur</button>
    </div>
    <h1 id="hddhdhd">Achetez au meilleur Prix</h1>
    <div id="dvlog">
        <div id="dvlos">
            <img style=" width:35%;margin:auto" src="img/1280px-XBOX_logo_2012 2.png" alt="">
            <div id="vpls">
                <p>Voir les jeux Xbox</p>
                <img id="imrd" src="img/Arrow 9.png" alt="">
            </div>
        </div>
        <div id="dvlos">
            <img style=" width:35%;margin:auto" src="img/1280px-PlayStation_logo 1.png" alt="">
            <div id="vpls">
                <p>Voir les jeux Xbox</p>
                <img id="imrd" src="img/Arrow 9.png" alt="">
            </div>
        </div>
        <div id="dvlos">
            <img style=" width:35%;margin:auto" src="img/PC.png" alt="">
            <div id="vpls">
                <p>Voir les jeux Xbox</p>
                <img id="imrd" src="img/Arrow 9.png" alt="">
            </div>
        </div>
        <div id="dvlos">
            <img style=" width:35%;margin:auto" src="img/Nintendo-Logo-1970-1975 2.png" alt="">
            <div id="vpls">
                <p>Voir les jeux Xbox</p>
                <img id="imrd" src="img/Arrow 9.png" alt="">
            </div>
        </div>
    </div>
    <h1 id="hds">Top jeux de la semaine</h1>
    <div class="parent">
        <div id="sparent1">
            <div class="div1"><img style="width: 100%;" src="img/8ZEssUZl5TmCSdAV5C8mZuyY 1.png" alt=""><button id="butdmp">Précommander</button></div>
            <div class="div2"><img style="width: 100%;" src="img/EGS_Battlefield2042_DICE_S1_2560x1440-36f16374c9c29a18a46872795b483d72_2560x1440-36f16374c9c29a18a46872795b483d72 (1) 4.png" alt=""><button id="butdmp">Précommander</button></div>
        </div>
        <div id="sparent2">
            <div class="div3"><img style="width: 100%;" src="img/wpHT6JXmOA9iECLZKRPRvt0U 1.png" alt=""><button id="butdmp">Précommander</button></div>
            <div class="div4"><img style="width: 100%;" src="img/a04f2744-74d9-4668-8263-e0261fbea869 1.png" alt=""><button id="butdmp">Précommander</button></div>
        </div>     
    </div>
    <h1 id="hds">Nos Meilleurs Vendeurs</h1>
    <div id="aftj2">
        <?php /* for( $i= 0 ;$i < 5; $i++ ) { */?>
            <div id="card12">
                <div style="width: 100%;"><img width="100%" src="img/Ellipse 12.png" alt=""></div>
                <div id="detj2">
                    <h4 style="margin: 3%;">Demon Lime</h4>
                    <p style="margin: 0 3%;">+100 jeux</p>
                    <img src="img/Frame 60.png" alt="">
                </div>
                <div id="btnje"><h4 style="margin: 3%;">Voir l'article</h4></div>
            </div>
            <div id="card12">
                <div style="width: 100%;"><img width="100%" src="img/Ellipse 12.png" alt=""></div>
                <div id="detj2">
                    <h4 style="margin: 3%;">Demon Lime</h4>
                    <p style="margin: 0 3%;">+100 jeux</p>
                    <img src="img/Frame 60.png" alt="">
                </div>
                <div id="btnje"><h4 style="margin: 3%;">Voir l'article</h4></div>
            </div>
            <div id="card12">
                <div style="width: 100%;"><img width="100%" src="img/Ellipse 12.png" alt=""></div>
                <div id="detj2">
                    <h4 style="margin: 3%;">Demon Lime</h4>
                    <p style="margin: 0 3%;">+100 jeux</p>
                    <img src="img/Frame 60.png" alt="">
                </div>
                <div id="btnje"><h4 style="margin: 3%;">Voir l'article</h4></div>
            </div>
            <div id="card12">
                <div style="width: 100%;"><img width="100%" src="img/Ellipse 12.png" alt=""></div>
                <div id="detj2">
                    <h4 style="margin: 3%;">Demon Lime</h4>
                    <p style="margin: 0 3%;">+100 jeux</p>
                    <img src="img/Frame 60.png" alt="">
                </div>
                <div id="btnje"><h4 style="margin: 3%;">Voir l'article</h4></div>
            </div>
        <?php // }?>
    </div>
    <h2 id="hds">Top jeux du moment</h2>
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