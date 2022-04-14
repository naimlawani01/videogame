<?php
    session_start();
    $title = "home";
    require 'header.php'; 
    $edi = $_GET['id'];
    $ed = getjeumarced($db,$edi);
?>
<body style="background-color: white;">
    <?php if ($ed) { ?>
    <main>
        <h1>Jeux <?= $ed[0]['editeur']?></h1>
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
                    <a href="single.php?id=<?= $edition['id']?>"><div id="btnjegrid"><h4 style="margin: 3%;">Voir l'article</h4></div></a>
                </div>
            <?php }?>
        </div>
    </main>
    <?php } else { ?>
        <h1>Pas encore de jeux pour cette edition</h1>
    <?php }?>

    <script src="js/scrit.js"></script>