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
    $req = "SELECT jeu.id as jeu_id, jeu.etat, jeu.prix, jeu.description, jeu.edition_id, jeu.vendeur_id, jeu.plateforme_id, jeu.support_id, edition.editeur, edition.pegi, edition.img_p, edition.description, edition.img_g, edition.categorie_id, categorie.categorie FROM jeu INNER JOIN edition ON jeu.edition_id = edition.id INNER JOIN categorie ON categorie.id = edition.categorie_id WHERE vendeur_id = :userId";
    $stmt = $db->getPDO()->prepare($req);

    $stmt->execute([
        'userId' => $userId
    ]);
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}
function getedition($db){
    $sqled = 'SELECT * FROM edition ORDER BY id DESC';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}
function geteditionupd($db,$ide){
    $sqled = 'SELECT * FROM edition WHERE jeu.id = :ide';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'ide' => $ide
    ]);
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}
///
function getjeumarced($db,$jeuxid){
    $sqled = "SELECT jeu.id, jeu.etat, jeu.prix, jeu.description,edition.editeur, edition.pegi,edition.img_p, edition.img_g, utilisateur.nom as nom_vendeur, plateforme.nom as nom_plateforme FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id LEFT JOIN utilisateur ON jeu.vendeur_id = utilisateur.id WHERE edition.id = :id";
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'id' => $jeuxid
    ]);
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}

function getjeumarc($db,$jeuxid){
    $sqled = "SELECT jeu.id, jeu.etat, jeu.prix, jeu.description,edition.editeur, edition.pegi,edition.img_p, edition.img_g, utilisateur.nom as nom_vendeur, plateforme.nom as nom_plateforme FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id LEFT JOIN utilisateur ON jeu.vendeur_id = utilisateur.id WHERE jeu.id = :id";
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'id' => $jeuxid
    ]);
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}

function getjeu($db,$ie){
    if ($ie === 'Playstation') {
        $sqled = "SELECT jeu.id as jeu_id, jeu.etat, jeu.prix,jeu.edition_id, jeu.vendeur_id, jeu.description, jeu.plateforme_id, jeu.support_id, edition.editeur, edition.pegi, edition.img_p, edition.description, edition.img_g, edition.categorie_id, plateforme.nom FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id WHERE plateforme.nom = :plateforme1 OR plateforme.nom = :plateforme2 OR plateforme.nom = :plateforme3";
        $queryed = $db->getPDO()->prepare($sqled);
        $queryed->execute([
        'plateforme1' => 'PS4',
        'plateforme2' => 'PS3',
        'plateforme3' => 'PS5'
        ]);
        $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
        return $dataed;
    } elseif ($ie === 'Xbox') {
        $sqled = "SELECT jeu.id as jeu_id, jeu.etat, jeu.prix,jeu.edition_id, jeu.vendeur_id, jeu.description, jeu.plateforme_id, jeu.support_id, edition.editeur, edition.pegi, edition.img_p, edition.description, edition.img_g, edition.categorie_id, plateforme.nom FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id WHERE plateforme.nom = :plateforme1 OR plateforme.nom = :plateforme2 OR plateforme.nom = :plateforme3";
        $queryed = $db->getPDO()->prepare($sqled);
        $queryed->execute([
            'plateforme1' => 'Xbox One',
            'plateforme2' => 'Xbox 360',
            'plateforme3' => 'Xbox Series X'
        ]);
        $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
        return $dataed;
    } elseif ($ie === 'Nintendo') {
        $sqled = "SELECT jeu.id as jeu_id, jeu.etat, jeu.prix,jeu.edition_id, jeu.vendeur_id, jeu.description, jeu.plateforme_id, jeu.support_id, edition.editeur, edition.pegi, edition.img_p, edition.description, edition.img_g, edition.categorie_id, plateforme.nom FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id WHERE plateforme.nom = :plateforme";
        $queryed = $db->getPDO()->prepare($sqled);
        $queryed->execute([
            'plateforme' => 'Nintendo Switch'
        ]);
        $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
        return $dataed;
    } elseif ($ie === 'Pc') {
        $sqled = "SELECT jeu.id as jeu_id, jeu.etat, jeu.prix,jeu.edition_id, jeu.vendeur_id, jeu.description, jeu.plateforme_id, jeu.support_id, edition.editeur, edition.pegi, edition.img_p, edition.description, edition.img_g, edition.categorie_id, plateforme.nom FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id WHERE plateforme.nom = :plateforme";
        $queryed = $db->getPDO()->prepare($sqled);
        $queryed->execute([
            'plateforme' => 'Pc'
        ]);
        $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
        return $dataed;
    }
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
function addEdition($db, $data){
    $stmt = $db->getPDO()->prepare('INSERT INTO edition (editeur, pegi, img_p, description, img_g, categorie_id) VALUES (:editeur, :pegi, :img_p, :description, :img_g ,:categorie_id)');
    var_dump($data);
    return $stmt->execute($data);
}

