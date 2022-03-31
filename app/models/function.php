<?php

function mailExit($email, $db)
{
    $sql = 'SELECT mail FROM utilisateur where mail= :email';
    $query = $db->getPDO()->prepare($sql);
    $query->execute([
        "email" => $email
    ]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function userExit($email, $password, $db){
    $checkSql = $db->getPDO()->prepare('SELECT *FROM  utilisateur WHERE mail= :email and password= :pswd ');
    $checkSql->execute([
        'email' => $email,
        'pswd' => $password
    ]);
    $data = $checkSql->fetch();
    return $data;
}
function isConnected(){
   

    if(isset($_SESSION['userid']) && $_SESSION['userid'] != null){
        return true;
    }else{
        return false;
    }
}
function getUser($userId, $db){
    $stmt = $db->getPDO()->prepare('SELECT * FROM  utilisateur WHERE id= :userId');
    $stmt->execute([
        'userId' => $userId,
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}
function getSellerGame($userId, $db){
    $req = "SELECT * FROM jeu INNER JOIN edition ON jeu.edition_id = edition.id INNER JOIN categorie ON categorie.id = edition.categorie_id WHERE vendeur_id = :userId";
    $stmt = $db->getPDO()->prepare($req);

    $stmt->execute([
        'userId' => $userId
    ]);
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}
function getedition($db){
    $sqled = 'SELECT * FROM edition';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}
///
function getjeumarc($db,$ie){
    $sqled = "SELECT * FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id WHERE plateforme.nom = :plateforme";
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'plateforme' => $ie
    ]);
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}

function geteditions($db){
    $sqled = 'SELECT * FROM edition INNER JOIN categorie ON edition.categorie_id = categorie.id ';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataeds = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataeds;
}

function getplt($db){
    $sqled = 'SELECT * FROM plateforme';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataeds = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataeds;
}
function getsupt($db){
    $sqled = 'SELECT * FROM support';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataeds = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataeds;
}

function getCategorie($db){
    $stmt = $db->getPDO()->prepare('SELECT * FROM categorie');
    $stmt->execute();
    $datas= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}

