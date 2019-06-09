<?php
include '../../../koneksi/config.php'
?>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Data Akun</title>
    <!-- Favicon-->
    <link rel="icon" href="../../../bootstrap/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../bootstrap/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../bootstrap/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../bootstrap/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../../../bootstrap/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../../bootstrap/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../bootstrap/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="../../dashboard.php">ADMIN WISBA</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo $_SESSION['foto_front_account']?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_account']?></div>
                <div class="email"><?php echo $_SESSION['email_account']?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
<!--                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>-->
<!--                        <li role="separator" class="divider"></li>-->
<!--                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>-->
<!--                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>-->
<!--                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>-->
<!--                        <li role="separator" class="divider"></li>-->
                        <li><a href="../../../proses/logout.php"><i class="material-icons">input</i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <?php include '../../../komponen/menu_lihat_keluhan.php' ?>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <?php include '../../../komponen/footer.php'?>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KELUHAN</h2>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Terverifikasi</h2>
                        <!--                        <ul class="header-dropdown m-r--5">-->
                        <!--                            <li class="dropdown">-->
                        <!--                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
                        <!--                                    <i class="material-icons">more_vert</i>-->
                        <!--                                </a>-->
                        <!--                                <ul class="dropdown-menu pull-right">-->
                        <!--                                    <li><a href="javascript:void(0);">Action</a></li>-->
                        <!--                                    <li><a href="javascript:void(0);">Another action</a></li>-->
                        <!--                                    <li><a href="javascript:void(0);">Something else here</a></li>-->
                        <!--                                </ul>-->
                        <!--                            </li>-->
                        <!--                        </ul>-->
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Gambar Keluhan</th>
                                    <th>Gambar Pelapor</th>
                                    <th>Nama Keluhan</th>
                                    <th>Deskripsi Keluhan</th>
                                    <th>Jenis Keluhan</th>
                                    <th>Lat Keluhan</th>
                                    <th>Long Keluhan</th>
                                    <th>Like</th>
                                    <th>Dislike</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM wisba_keluhan WHERE status_keluhan='Publikasi' ");
                                while ($d = mysqli_fetch_array($query)) { echo '
                                <tbody>
                                <tr>
                                    <td>'.$d['id_keluhan'].'</td>
                                    <td>
                                    <div class="round-img">
                                         <a href="#"><img class="rounded-circle" src="'.$d['gambar_keluhan'].'" style="width: 80px;height: 80px"></a>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="round-img">
                                         <a href="#"><img class="rounded-circle" src="'.$d['face_pelaporan_keluhan'].'" style="width: 80px;height: 80px"></a>
                                    </div>
                                    </td>
                                    <td>'.$d['nama_keluhan'].'</td>
                                    <td>'.$d['deskripsi_keluhan'].'</td>
                                    <td>'.$d['jenis_keluhan'].'</td>
                                    <td>'.$d['lat_keluhan'].'</td>
                                    <td>'.$d['long_keluhan'].'</td>
                                    <td>'.$d['like_keluhan'].'</td>
                                    <td>'.$d['dislike_keluhan'].'</td>
                                    <td>'.$d['status_keluhan'].'</td>
                                    <td>
                                   <span>
                                    <a href="../../../proses/keluhan/batal_publikasi.php?id_keluhan='.$d['id_keluhan'].'">
                                    <button type="submit" class="btn btn-success waves-effect">Batal Publikasi</button></a>
                                    </span>
                                    </td> 
                                </tr>
                                </tbody> ';} ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="../../../bootstrap/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="../../../bootstrap/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../../../bootstrap/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../../../bootstrap/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../../../bootstrap/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="../../../bootstrap/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="../../../bootstrap/plugins/raphael/raphael.min.js"></script>
<script src="../../../bootstrap/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="../../../bootstrap/plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="../../../bootstrap/plugins/flot-charts/jquery.flot.js"></script>
<script src="../../../bootstrap/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="../../../bootstrap/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="../../../bootstrap/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="../../../bootstrap/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="../../../bootstrap/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="../../../bootstrap/js/admin.js"></script>
<script src="../../../bootstrap/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="../../../bootstrap/js/demo.js"></script>
</body>

</html>