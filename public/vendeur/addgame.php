<?php 
session_start();
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('videogame'); 
require '../../app/controllers/DashbordController.php';
require('../../app/controllers/addgamecontroller.php');
$title = 'Inscription';
$edition = getedition($db);
$platforme = getplt($db);
$support = getsupt($db);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>AdminLTE 3 | Dashboard 3</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?=$user['nom']?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="dashboard.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Jeux
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">EXAMPLES</li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <!-- /.col -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                <h1>Vendre un jeu !</h1>
                <form action="" id="formulaire" method="post">
                    
                    <div id="formulairejeu">

                        <div style="display: flex;flex-direction:column">
                            <label for="edition">Edition</label>
                            <select name="edition" id="roleis">
                                <?php foreach ($edition as $editu) { ?>
                                    <option value="<?= $editu['id'] ?>"><?= $editu['editeur'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div style="display: flex;flex-direction:column">
                            <label for="plateforme">Plateforme</label>
                            <select name="plateforme" id="roleis">
                                <?php foreach ($platforme as $platu) { ?>
                                    <option value="<?= $platu['id'] ?>"><?= $platu['nom'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div style="display: flex;flex-direction:column">
                            <label for="support">Support</label>
                            <select name="support" id="roleis">
                                <?php foreach ($support as $suptu) { ?>
                                    <option value="<?= $suptu['id'] ?>"><?= $suptu['nom'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div style="display: flex;flex-direction:column">
                            <label for="etat">Etat</label>
                            <select name="etat" id="roleis">
                                <option value="Neuf">Neuf</option>
                                <option value="Bon">Bon</option>
                                <option value="Mauvais">Mauvais</option>
                            </select>
                        </div>
                        
                        <div style="display: flex;flex-direction:column">
                            <label for="prix">Prix</label>
                            <input name="prix" type="number" style="width: 100%;height:46px;border:0px">
                        </div>

                        <div style="display: flex;flex-direction:column">
                            <label for="description">Pescription</label>
                            <input name="description" type="text" style="width: 100%;height:100px;border:0px">
                        </div>
                        <div>
                            <input type="submit" value="Ajouter le jeu" id="submit">
                        </div>
                    </div>
                </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

</body>

</html>