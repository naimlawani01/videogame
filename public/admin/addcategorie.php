<?php 
session_start();
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('videogame'); 
require '../../app/controllers/AddCategorieController.php';
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
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="categorie.php" class="nav-link active">
                                <p>
                                    Categorie
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="plateforme.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Plateforme
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="support.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Support
                                    <i class="right fa fa-angle-left"></i>
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
                            <h1 class="m-0">Ajouter une categorie</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?php if (isset($succes) && $succes === true) { ?>
                        <div class="alert alert-success">Categorie ajouté</div>
                    <?php } ?>
                    <?php if (isset($succes) && $succes === false) { ?>
                        <div class="alert alert-danger">Categorie existe</div>
                    <?php } ?>
                    <form action="" id="formulaire" method="post" enctype="multipart/form-data">
                        <div id="formulairejeu">
                            <div style="display: flex;flex-direction:column">
                                <label for="editeur">Nom de la catégorie</label>
                                <input style="width: 100%;height:46px;border:0px" type="text" name="categorie" id="categorie">
                            </div>
                            <div>
                                <input type="submit" value="Ajouter la categorie" id="submit">
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
    </div>
    <!-- ./wrapper -->

</body>

</html>