<?php
    session_start();
    $title = "home";
    require 'header.php'; 
    if($_GET['plateforme'] === 'xbox'){
        $ie = 2;
    };
    $ed = getedition($db,$ie);
    var_dump($ed);
?>
<main>
    <h1>Jeux <?= $_GET['plateforme']?></h1>
    <div id="dvcent">
        <div id="navga">
            <div id="gennav">
                <h2>Genre</h2>
                    <div>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Action</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns">
                        <label for="horns">Aventure</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns">
                        <label for="horns">Sport</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns">
                        <label for="horns">Tir</label>
                    </div>
                <h2>Prix</h2>
                    <div>
                        <input type="range" id="cowbell" name="cowbell" min="0" max="300" value="90" step="10">
                        <label for="cowbell"></label>
                    </div>
                <h2>Type</h2>
                    <div>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Action</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns">
                        <label for="horns">Aventure</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns">
                        <label for="horns">Sport</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns">
                        <label for="horns">Tir</label>
                    </div>
                <h2>Etat</h2>
                    <div>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Neuf</label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns">
                        <label for="horns">Occasion</label>
                    </div>
            </div>
        </div>
        <div id="navdr">
            <div id="aftj">
                <?php  foreach($ed as $esd) { ?>
                    <div id="card1">
                        <div style="width: 100%;"><img width="100%" src="<?= $esd['img'] ?>" alt=""></div>
                        <div id="detj">
                            <h4 style="margin: 3%;"><?= $esd['editeur'] ?></h4>
                            <p style="margin: 0 3%;">A partir de </p>
                        </div>
                        <div id="btnje"><h4 style="margin: 3%;">Voir l'article</h4></div>
                    </div>
                <?php }?>
            </div>
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
        </div>
    </div>
</main>
