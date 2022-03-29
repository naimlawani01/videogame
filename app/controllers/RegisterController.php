<?php

namespace App\controllers;

use PDO;
class RegisterController extends Controller
{

    public function index(){
        return $this->view('register');

    }
    public function store(){
        if(
            isset($_POST['nom']) &&
            isset($_POST['prenom']) &&
            isset($_POST['email']) &&
            isset($_POST['password']) &&
            isset($_POST['confirmpassword'])){
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));
            $confirmpassword = htmlspecialchars(trim($_POST['confirmpassword']));
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if($password === $confirmpassword){
                    if(strlen($password)>8){
                        $password = sha1($password);
                        $preparedRequest = $this->db->getPDO()->prepare('INSERT INTO utilisateur (nom, prenom, mail, password, role_id) VALUES (:nom, :prenom, :mail, :password, :role_id)');
                        $preparedRequest->bindValue('nom', $nom, PDO::PARAM_STR);
                        $preparedRequest->bindValue('prenom', $prenom, PDO::PARAM_STR);
                        $preparedRequest->bindValue('mail', $email, PDO::PARAM_STR);
                        $preparedRequest->bindValue('password', $password, PDO::PARAM_STR);
                        $preparedRequest->bindValue('role_id', 1, PDO::PARAM_INT);
                        $preparedRequest->execute();

                    }
                }
            }
        }

        $link = $_SERVER['HTTP_HOST'];
        return header("Location: /login");
    }
}