<?php
require '../vendor/autoload.php';
require '../app/models/function.php';
use App\Database;
$db = new Database('videogame');
$userId= $_SESSION['userid'];
$user =getUser($userId, $db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $title?></title>
</head>
<body>
<header>
    <div id="navpp">
        <div id="navha">
            <div id="navhaform">
                <form action="" method="get" style="width: 100%;display: flex;height: 52px;">
                    <input style="width: 100%;margin: 0px;border: none;background-color: #EDEDED;" type="text">
                    <button style="height: 100%;margin: 0px;border: none;background-color: #D2D2D2;" type="submit"><img src="img/akar-icons_search.png" alt=""></button>
                </form>
            </div>
            <div style="padding: 1%;">
                <?php if(isConnected()): ?>
                    <?php if($user['role_id']==2):?>
                    <a href="vendeur/dashboard.php"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
                    <?php elseif($user['role_id']==3):?>
                        <a href="admin/dashboard.php"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
                    <?php elseif($user['role_id']==1):?>
                        <a href="client/dashboard.php"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
                    <?php endif;?>
                <?php else: ?>
                    <a href="/register"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
                <?php endif; ?>
                <img style="height: 100%;" src="img/noun-buy-4716653 3.png" alt="">
                <img style="height: 100%;" src="img/noun-heart-4714219 1.png" alt="">
            </div>
        </div>
        <div style="margin: 2% 0px;">
            <ul style="list-style: none;display:flex;gap:2%">
                <a href="index.php"><li>Home</li></a>
                <a href="archive.php?plateforme=Xbox"><li>Xbox</li></a>
                <a href="archive.php?plateforme=Playstation"><li>Playstation</li></a>
                <a href="archive.php?plateforme=Pc"><li>Pc</li></a>
                <a href="archive.php?plateforme=Nintendo"><li>Nintendo</li></a>
            </ul>
        </div>
    </div>
    <div id="navmob">
        <div id="navhaform">
            <form action="" method="get" style="width: 100%;display: flex;height: 52px;">
                <input style="width: 100%;margin: 0px;border: none;background-color: #EDEDED;" type="text">
                <button style="height: 100%;margin: 0px;border: none;background-color: #D2D2D2;" type="submit"><img src="img/akar-icons_search.png" alt=""></button>
            </form>
        <?php if(isConnected()): ?>

            <a style="padding: 2%;" href="vendeur/dashboard.php"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
        <?php else: ?>
            <a style="padding: 2%;" href="login.php"><img style="height: 100%;" src="img/noun-account-4110328 1.png" alt=""></a>
        <?php endif; ?>
        </div>
        <div style="margin: 2% 0px;">
            <ul style="list-style: none;display:flex;gap:2%">
                <a href="index.php"><li>Home</li></a>
                <a href="archive.php?plateforme=Xbox"><li>Xbox</li></a>
                <a href="archive.php?plateforme=Playstation"><li>Playstation</li></a>
                <a href="archive.php?plateforme=Pc"><li>Pc</li></a>
                <a href="archive.php?plateforme=Nintendo"><li>Nintendo</li></a>
            </ul>
        </div>
    </div>
</header>
