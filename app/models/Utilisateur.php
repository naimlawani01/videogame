<?php

namespace App\models;

class User extends Model
{
    private int $ID;
    private string $nom;
    private string $possesseur;
    private string $console;
    private int $prix;
    private string $nbre_joueurs_max;
    private string $commentaires;
    protected $table = "utilisateur";
}