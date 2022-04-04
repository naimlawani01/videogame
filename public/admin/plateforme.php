<?php 
session_start();
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('videogame'); 
require '../../app/controllers/PlateformeController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
                    <a href="../index.php" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light">Video Game</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div style="color: white;" class="image">
                        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
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
                            <a href="dashboard.php" class="nav-link">
                                <p>
                                    Edition 
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="categorie.php" class="nav-link">
                                <p>
                                    Categorie
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="plateforme.php" class="nav-link active">
                                <p>
                                    Plateforme
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="support.php" class="nav-link ">
                                <p>
                                    Support
                                </p>
                            </a>
                        </li>
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
                        <div class="col-sm-6">
                            <h1 class="m-0">Plateforme jeux</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="float-sm-right">
                                <a name="" id="" class="btn btn-primary" href="addplateforme.php" role="button"><i class="fa fa-plus fa-" aria-hidden="true"></i> Ajouter une plateforme</a>
                            </ol>
                        </div>
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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($plateformes as $plateforme):?>
                            <tr>
                                <td scope="row"><img height="65px"  src="<?=$plateforme['nom']?>" alt=""></td>
                                <td><?=$plateforme['nom']?></td>
                                <td><a name="" id="" class="btn btn-warning" href="updateplateforme.php?plateforme=<?=$plateforme['id']?>" role="button">Modifier</a></td>
                                <td><a name="" id="" class="btn btn-danger" href="deleteplatforme.php?plateforme=<?=$plateforme['id']?>" role="button">Supprimer</a></td>
                            </tr>
                            <?php endforeach; ?>
                          
                        </tbody>
                    </table>
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