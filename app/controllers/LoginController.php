<?php

namespace App\controllers;

use App\models\Utilisateur;

class LoginController extends Controller
{
    public function index(){
        $user = new Utilisateur($this->getDb());
        $user = $user->all();

        return $this->view('login');

    }
}