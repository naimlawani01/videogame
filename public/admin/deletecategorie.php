<?php 
session_start();
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('videogame'); 

$title = 'Inscription';

$id = $_GET['categorie'];

$query = $db->getPDO()->prepare('DELETE FROM categorie WHERE id = :id');

$query->bindValue(':id', $id, PDO::PARAM_INT);

$query->execute();

header('Location: categorie.php');


?>