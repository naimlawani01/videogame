<?php
/**
* Vérifie si le mail existe dans la base de donée.
*
* @param string $email l'email a verifier
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
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
/**
* Vérifie si l'utilisateur existe dans la base de donée.
*
* @param string $email l'email a verifier
* @param string $password le mots de passe a verifier
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function userExit($email, $password, $db){
    $checkSql = $db->getPDO()->prepare('SELECT *FROM  utilisateur WHERE mail= :email and password= :pswd ');
    $checkSql->execute([
        'email' => $email,
        'pswd' => $password
    ]);
    $data = $checkSql->fetch();
    return $data;
}
/**
* Vérifie si l'utilisateur est connecté.
*
* @return booleen 
*/
function isConnected(){
    if(isset($_SESSION['userid']) && $_SESSION['userid'] != null){
        return true;
    }else{
        return false;
    }
}
/**
* Recupaire les données de l'utilisateur dans la base de donée.
*
* @param int $userId l'id de l'utilisateur
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getUser($userId, $db){
    $stmt = $db->getPDO()->prepare('SELECT * FROM  utilisateur WHERE id= :userId');
    $stmt->execute([
        'userId' => $userId,
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}
/**
* Recupaire les jeux de l'utilisateur dans la base de donée.
*
* @param int $userId l'id de l'utilisateur
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getSellerGame($userId, $db){
    $req = "SELECT jeu.id as jeu_id, jeu.etat, jeu.prix, jeu.description, jeu.edition_id, jeu.vendeur_id, jeu.plateforme_id, jeu.support_id, edition.editeur, edition.pegi, edition.img_p, edition.description, edition.img_g, edition.categorie_id, categorie.categorie FROM jeu INNER JOIN edition ON jeu.edition_id = edition.id INNER JOIN categorie ON categorie.id = edition.categorie_id WHERE vendeur_id = :userId";
    $stmt = $db->getPDO()->prepare($req);

    $stmt->execute([
        'userId' => $userId
    ]);
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}
/**
* Recupaire les edition dans la base de donée.
*
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getedition($db){
    $sqled = 'SELECT * FROM edition ORDER BY id DESC';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}
/**
* Recupaire les informations sur un jeu la base de donée.
*
* @param int $ide l'id du jeu
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function geteditionupd($db,$ide){
    $sqled = 'SELECT * FROM edition WHERE jeu.id = :ide';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'ide' => $ide
    ]);
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}
/**
* Recupaire les jeux de l'edition dans la base de donée.
*
* @param int $jeuid l'id de l'edition
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getjeumarced($db,$jeuxid){
    $sqled = "SELECT jeu.id, jeu.etat, jeu.prix, jeu.description,edition.editeur, edition.pegi,edition.img_p, edition.img_g, utilisateur.nom as nom_vendeur, plateforme.nom as nom_plateforme FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id LEFT JOIN utilisateur ON jeu.vendeur_id = utilisateur.id WHERE edition.id = :id";
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'id' => $jeuxid
    ]);
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}
/**
* Recupaire les information d'un jeu dans la base de donée.
*
* @param int $jeuxid l'id du jeu
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getjeumarc($db,$jeuxid){
    $sqled = "SELECT jeu.id, jeu.etat, jeu.prix, jeu.description,edition.editeur, edition.pegi,edition.img_p, edition.img_g, utilisateur.nom as nom_vendeur, plateforme.nom as nom_plateforme FROM jeu LEFT JOIN edition ON jeu.edition_id = edition.id LEFT JOIN plateforme ON jeu.plateforme_id = plateforme.id LEFT JOIN utilisateur ON jeu.vendeur_id = utilisateur.id WHERE jeu.id = :id";
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'id' => $jeuxid
    ]);
    $dataed = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataed;
}
/**
* Recupaire tous les jeux d'une plateforme dans la base de donée.
*
* @param string $ie la plateforme
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
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
/**
* Recupaire toutes les editions dans la base de donée.
*
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function geteditions($db){
    $sqled = 'SELECT * FROM categorie  INNER JOIN  edition  ON edition.categorie_id = categorie.id ';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataeds = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataeds;
}
/**
* Recupaire toutes les plateformes dans la base de donée.
*
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getplt($db){
    $sqled = 'SELECT * FROM plateforme';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataeds = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataeds;
}
/**
* Recupaire tous les supports dans la base de donée.
*
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getsupt($db){
    $sqled = 'SELECT * FROM support';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute();
    $dataeds = $queryed->fetchAll(PDO::FETCH_ASSOC);
    return $dataeds;
}
/**
* Recupaire toutes les categories dans la base de donée.
*
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getCategorie($db){
    $stmt = $db->getPDO()->prepare('SELECT * FROM categorie');
    $stmt->execute();
    $datas= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}
/**
* Ajoute une edition dans la base de donée.
*
* @param array $data tableau des information de l'edition
* @param Object $db Instance de la base de donnée
*
*
* @return 
*/
function addEdition($db, $data){
    $stmt = $db->getPDO()->prepare('INSERT INTO edition (editeur, pegi, img_p, description, img_g, categorie_id) VALUES (:editeur, :pegi, :img_p, :description, :img_g ,:categorie_id)');
    return $stmt->execute($data);
}
/**
* Recupaire l'editions dans la base de donée.
*
* @param int $idEdition l'id de l'edition
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function showEdition($db, $idEdition){
    $sqled = 'SELECT * FROM categorie  INNER JOIN  edition  ON edition.categorie_id = categorie.id where edition.id= :idEdition';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'idEdition' => $idEdition
    ]);
    $dataeds = $queryed->fetch(PDO::FETCH_ASSOC);
    return $dataeds;

}
/**
* Modifie l'editions dans la base de donée.
*
* @param array $data les informatione de l'edition
* @param Object $db Instance de la base de donnée
*
*
* @return 
*/
function updateEdition($db, $data){
    $stmt = $db->getPDO()->prepare("UPDATE edition SET editeur=:editeur, pegi=:pegi, img_p=:img_p, description= :description, img_g =:img_g, categorie_id = :categorie_id WHERE id=:idEdition");
    return $stmt->execute($data);
}
/**
* Recupaire la categorie dans la base de donée.
*
* @param int $idCategorie l'id de la categorie
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function showCategorie($db, $idCategorie){
    $sqled = 'SELECT * FROM categorie WHERE  id= :idCategorie';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'idCategorie' => $idCategorie
    ]);
    $dataeds = $queryed->fetch(PDO::FETCH_ASSOC);
    return $dataeds;
}
/**
* Modifie la categorie dans la base de donée.
*
* @param array $data les informatione de la categorie
* @param Object $db Instance de la base de donnée
*
*
* @return 
*/
function updateCategorie($db, $datas){
    $stmt = $db->getPDO()->prepare("UPDATE categorie SET categorie=:categorie WHERE id=:idCategorie");
    return $stmt->execute($datas);
}
/**
* Recupaire les plateformes dans la base de donée.
*
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getPlateforme($db){
    $stmt = $db->getPDO()->prepare('SELECT * FROM plateforme');
    $stmt->execute();
    $datas= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}
/**
* Recupaire la plateforme dans la base de donée.
*
* @param int $idPlateforme l'id de la plateforme
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function showPlateforme($db, $idPlateforme){
    $sqled = 'SELECT * FROM plateforme WHERE  id= :idPlateforme';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'idPlateforme' => $idPlateforme
    ]);
    $dataeds = $queryed->fetch(PDO::FETCH_ASSOC);
    return $dataeds;
}
/**
* Modifie la plateforme dans la base de donée.
*
* @param array $data les informatione de la plateforme
* @param Object $db Instance de la base de donnée
*
*
* @return
*/
function updatePlateforme($db, $datas){
    $stmt = $db->getPDO()->prepare("UPDATE plateforme SET nom=:nom WHERE id=:idPlateforme");
    return $stmt->execute($datas);
}
/**
* Recupaire tous les support dans la base de donée.
*
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function getSupport($db){
    $stmt = $db->getPDO()->prepare('SELECT * FROM support');
    $stmt->execute();
    $datas= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}
/**
* Recupaire le support dans la base de donée.
*
* @param int $idSupport l'id du support
* @param Object $db Instance de la base de donnée
*
*
* @return array Un tableau
*/
function showSupport($db, $idSupport){
    $sqled = 'SELECT * FROM support WHERE  id= :idSupport';
    $queryed = $db->getPDO()->prepare($sqled);
    $queryed->execute([
        'idSupport' => $idSupport
    ]);
    $dataeds = $queryed->fetch(PDO::FETCH_ASSOC);
    return $dataeds;
}
/**
* Modifie le support dans la base de donée.
*
* @param array $data les informatione du support
* @param Object $db Instance de la base de donnée
*
*
* @return
*/
function updateSupport($db, $datas){
    $stmt = $db->getPDO()->prepare("UPDATE support SET nom=:nom WHERE id=:idSupport");
    return $stmt->execute($datas);
}
function getuserinf($db, $userid){
    $stmt = $db->getPDO()->prepare('SELECT * FROM utilisateur WHERE utilisateur.id = :userid');
    $stmt->execute([
        'userid' => $userid
    ]);
    $datas= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $datas;
}