<?php 
session_start();
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('videogame'); 

$title = 'Inscription';

$id = $_GET['id'];

$query = $db->getPDO()->prepare('DELETE FROM jeu WHERE jeu.id = :id');

$query->bindValue(':id', $id, PDO::PARAM_INT);

$query->execute();

header('Location: dashboard.php');


?>
