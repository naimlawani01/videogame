<?php

$pdomail = new PDO('mysql:host=localhost;dbname=videogame', 'root', '');


$sql = 'SELECT mail FROM `utilisateur`';
$query = $pdomail->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
