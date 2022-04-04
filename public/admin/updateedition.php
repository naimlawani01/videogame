<?php 
session_start();
require '../../vendor/autoload.php';
require '../../app/models/function.php';
use App\Database;

$db = new Database('videogame'); 
require '../../app/controllers/UpdateEditionController.php';
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
                            <a href="dashboard.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Edition 
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="categorie.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Categorie
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="plateforme.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Plateforme
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="support.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Support
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
                        <div class="col-sm-6">
                            <h1 class="m-0">Ajouter un jeux</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="float-sm-right">
                                <a name="" id="" class="btn btn-primary" href="addgame.php" role="button"><i class="fa fa-plus fa-" aria-hidden="true"></i> Ajouter un jeu</a>
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
                    <form action="" id="formulaire" method="post" enctype="multipart/form-data">
                        <div id="formulairejeu">
                            <?php if(isset($message) and $message): ?>
                                <div class="card text-white bg-danger py-2">
                                    <center><?=$message?></center>
                                </div>
                            <?php endif; ?>
                            <div style="display: flex;flex-direction:column">
                                <label for="editeur">Editeur</label>
                                <input value="<?=$edition['editeur']?>" style="width: 100%;height:46px;border:0px" type="text" name="editeur" id="editeur">
                            </div>
                            <div style="display: flex;flex-direction:column">
                                <label for="pegi">PEGI</label>
                                <input value="<?=$edition['pegi']?>" name="pegi" type="text" style="width: 100%;height:46px;border:0px">
                            </div>
                            <div style="display: flex;flex-direction:column">
                                <label for="categorie">Categorie</label>
                                <select name="categorie" id="roleis">
                                    <?php foreach ($categories as $categorie) { ?>
                                        <option <?php if($categorie['id']==$edition['categorie_id']) echo 'selected' ?> value="<?= $categorie['id'] ?>"><?= $categorie['categorie'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div style="display: flex;flex-direction:column">
                                <label for="image_p">Petite Image  </label>
                                <input value="hell.php" type="file" name="image_p" id="image_p" cols="30" rows="10">
                            </div>
                            <div style="display: flex;flex-direction:column">
                                <label for="image_g">Grane Image </label>
                                <input type="file" name="image_g" id="image_g" cols="30" rows="10">
                            </div>
                            <div style="display: flex;flex-direction:column">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10"><?=$edition['description']?></textarea>
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
    </div>
    <!-- ./wrapper -->

</body>

</html>