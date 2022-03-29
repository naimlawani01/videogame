<?php
    session_start();
    $title = "home";
    require 'header.php'; 
?>
    <main>
        <div id="imt">
            <div id="imgch">
                <div><h1 id="ph1">Le Meilleur des jeux Vidéos aux bouts des doigts !</h1></div>
                <div>
                    <form action="index.html" id="home">
                        <input type="text" placeholder="Rechercher..." name="search" class="champ2">
                    </form>
                </div>
            </div>
            <div id="imgd"><img src="/img/larareddead.png" alt="" id="imglara" id="imglarareddead"></div>
        </div>
        <h2 id="topje">Top jeux du moment</h2>
        <div id="aftj">
            <?php  for( $i= 0 ;$i < 5; $i++ ) { ?>
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

</body>
</html>


