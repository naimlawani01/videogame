<?php
    session_start();
    $title = "home";
    require 'header.php'; 
    $ie = $_GET['plateforme'];
    $ed = getjeu($db,$ie);
?>
<body style="background-color: white;">
    <main>
        <h1>Jeux <?= $_GET['plateforme']?></h1>
        <div id="divctgfl">
            <div><p>Genre</p></div>
            <div><p>Prix</p></div>
            <div><p>Type</p></div>
            <div><p>Etat</p></div>
        </div>
        <div id="aftjgrid">
            <?php  foreach ($ed as $edition){ ?>
                <div id="card1grid">
                    <div style="width: 100%;"><img width="100%" src="<?= $edition['img_p'] ?>" alt=""></div>
                    <div id="detj">
                        <h4 style="margin: 3%;"><?= $edition['editeur'] ?></h4>
                        <p style="margin: 0 3%;">A partir de <strong><?= $edition['prix'] ?> €</strong> </p>
                    </div>
                    <a style="text-decoration: none;" href="single.php?id=<?= $edition['jeu_id']?>"><div id="btnjegrid"><h4 style="margin: 3%;">Voir l'article</h4></div></a>
                </div>
            <?php }?>
        </div>


        <script src="js/scrit.js"></script>