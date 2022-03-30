<?php
session_start();
$title = 'Inscription';
require 'header.php';
require('../app/controllers/RegisterController.php');
$edition = geteditions($db);
$platforme = getplt($db);
$support = getsupt($db);
    
?>


<h1>Vendre un jeu !</h1>

<?php if($errmail === true) { ?>
    <div id="erreurformulaireC">
        <p style="color: white;">Email non valide</p>
    </div>
<?php }?>
<?php if($errpassword === true) { ?>
    <div id="erreurformulaireC">
        <p style="color: white;">les mots de passe ne correspondent pas</p>
    </div>
<?php }?>
<form action="" id="formulaire" method="post">
    
    <div id="formulairejeu">

        <div >
            <select name="edition" id="roleis">
                <?php foreach ($edition as $editu) { ?>
                    <option value="<?= $editu['id'] ?>"><?= $editu['editeur'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div >
            <select name="plateforme" id="roleis">
                <?php foreach ($platforme as $platu) { ?>
                    <option value="<?= $platu['id'] ?>"><?= $platu['nom'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div >
            <select name="support" id="roleis">
                <?php foreach ($support as $suptu) { ?>
                    <option value="<?= $suptu['id'] ?>"><?= $suptu['nom'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div >
            <select name="etat" id="roleis">
                <option value="Neuf">Neuf</option>
                <option value="Bon">Bon</option>
                <option value="Mauvais">Mauvais</option>
            </select>
        </div>
        
        <div id="roleis">
            <input name="PRIX" type="number" style="width: 100%;height:100%;border:0px">
        </div>

        <div id="roleis">
            <input name="description" type="text" style="width: 100%;height:100%;border:0px">
        </div>
    </div>

    
