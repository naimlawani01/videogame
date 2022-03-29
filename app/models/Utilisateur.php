<?php

namespace App\models;

class Utilisateur extends Model
{
    private int $ID;
    private string $nom;
    private string $prenom;
    private string $mail;
    private string $password;
    private int $role_id;
    protected $table = "utilisateur";
    public function look(){

    }
}