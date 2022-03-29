<?php 

$rsl=0;
if (isset($_POST['email'])) {$email = $_POST['email'];};
if (isset($_POST['password'])) { $password = sha1($_POST['password']); };
if (isset($_POST['email']) && isset($_POST['password'])) {
    $sqluser = 'SELECT mail,password FROM utilisateur WHERE mail=:email AND password= :password';
    $queryuser = $db->getPDO()->prepare($sqluser);
    $queryuser->execute([
        'email' => $email,
        'password' => $password
    ]);
    $resultuser = $queryuser->fetchAll(PDO::FETCH_ASSOC);
    $rsl = count($resultuser);
}
    
$rslmail=0;
if (isset($_POST['email'])) {$email = $_POST['email'];};
if (isset($_POST['password'])) { $password = sha1($_POST['password']); };
if (isset($_POST['email']) && isset($_POST['password'])) {
    $sqlusermail = 'SELECT mail FROM utilisateur WHERE mail=:email';
    $queryusermail = $db->getPDO()->prepare($sqlusermail );
    $queryusermail->execute([
        'email' => $email,
    ]);
    $resultusermail = $queryusermail->fetchAll(PDO::FETCH_ASSOC);
    $rslmail = count($resultusermail);
}