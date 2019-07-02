<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/11/2019
 * Time: 9:45 AM
 */

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

    <!-- Bootstrap Select Css -->
    <link href="../../../bootstrap/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


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
            <?php include '../../../komponen/menu_edit_akun.php' ?>
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
            <h2>DATA AKUN</h2>
        </div>
        <!-- #END# Widgets -->
        <!-- Input Group -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT AKUN
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Data</h2>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <?php
                                $id_account = $_GET['id_account'];
                                $query = mysqli_query($db,"SELECT * FROM wisba_account WHERE id_account='$id_account'");
                                while($data = mysqli_fetch_array($query)){
                                ?>
                                <form action="../../../proses/akun/admin_edit.php" method="POST">
                                    <p style="color: black">ID</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="id_account" name="id_account" value="<?php echo $data['id_account']?>" class="form-control date" placeholder="ID" readonly>
                                    </div>
                                </div>
                                    <p style="color: black">Waktu Registrasi</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="registered" name="registered" value="<?php echo $data['registered']?>" class="form-control date" placeholder="Registrasi" readonly>
                                    </div>
                                </div>
                                    <p style="color: black">Nama Akun</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="nama_account" name="nama_account" value="<?php echo $data['nama_account']?>" class="form-control date" placeholder="Nama">
                                    </div>
                                </div>
                                    <p style="color: black">Email</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="email_account" name="email_account" value="<?php echo $data['email_account']?>" class="form-control date" placeholder="Email">
                                    </div>
                                </div>
                                    <p style="color: black">No Handphone</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="no_hp_account" name="no_hp_account" value="<?php echo $data['no_hp_account']?>" class="form-control date" placeholder="No Hp">
                                    </div>
                                </div>
                                    <p style="color: black">NIK</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">credit_card</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="nik_account" name="nik_account" value="<?php echo $data['nik_account']?>" class="form-control date" placeholder="NIK">
                                    </div>
                                </div>
                                    <p style="color: black">Alamat</p>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" id="alamat_account" name="alamat_account" placeholder="Alamat"><?php echo $data['alamat_account']?></textarea>
                                    </div>
                                </div>
                                    <p style="color: black">Agama</p>
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" id="agama_account" name="agama_account">
                                            <option value="">-- Please select --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                        <p style="color: black;">Jabatan</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="jabatan_account" name="jabatan_account" value="<?php echo $data['jabatan_account']?>" class="form-control date" placeholder="Jabatan">
                                    </div>
                                </div>
                                    <p style="color: black">Kota</p>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" id="kota_account" name="kota_account" class="form-control no-resize" placeholder="Kota"><?php echo $data['kota_account']?></textarea>
                                    </div>
                                </div>
                                    <p style="color: black">Kabupaten</p>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" id="kab_account" name="kab_account" class="form-control no-resize" placeholder="Kabupaten"><?php echo $data['kab_account']?></textarea>
                                    </div>
                                </div>
                                    <p style="color: black">Link Foto</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">computer</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="foto_front_account" name="foto_front_account" value="<?php echo $data['foto_front_account']?>" class="form-control date" placeholder="Foto" readonly>
                                    </div>
                                </div>
                                    <p style="color: black">Link Tanda Tangan</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">computer</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" id="ttd_account" name="ttd_account" value="<?php echo $data['ttd_account']?>" placeholder="Tanda Tangan" readonly>
                                    </div>
                                </div>
                                    <p style="color: black">Username</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" id="username" name="username" value="<?php echo $data['username']?>" placeholder="Username">
                                    </div>
                                </div>
                                    <p style="color: black">Password</p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">vpn_key</i>
                                        </span>
                                    <div class="form-line">
                                        <input type="text" id="password" name="password" value="<?php echo $data['password']?>" class="form-control date" placeholder="Password">
                                    </div>
                                </div>
                                    <p style="color: black">Status</p>
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" id="status_account" name="status_account">
                                            <option value="">-- Please select --</option>
                                            <option value="Umum">Umum</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary waves-effect" id="submit" name="submit" type="submit">SUBMIT</button>
                                    </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input Group -->
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