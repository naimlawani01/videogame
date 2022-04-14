<?php
    require '../vendor/autoload.php';
    require '../app/models/function.php';
    use App\Database;
    $db = new Database('videogame');
    $jeux = $_POST['jeux'];
    $nom = getnomjeux($db,$jeux);

?>
<ul style="list-style: none;width: 60%;display: flex;flex-direction: column;margin: 0px;padding: 0px;margin: 0PX 10%;;">
    <?php foreach ($nom as $name) { ?>
        <a href="archive_edition.php?id=<?= $name['id']?>"><li style="border: solid;border-width: 1px;padding: 10px 0px;width: 100%;background-color: white;"><?php echo $name['nomdujeu']; ?></li></a>
    <?php } ?>
</ul>

