<?php
$koneksi = new mysqli("localhost", "root", "", "puskeswan");
session_start();
if (!isset($_SESSION["admin"])) {
    echo "<script>alert('login dulu');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PUSKESWAN : ADMIN</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo $_SESSION['nama_admin']; ?> &nbsp; <a href="keluar.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Beranda</a></li>
                    <li><a href="index.php?halaman=reservasi"><i class="fa fa-dashboard fa-3x"></i> Reservasi</a></li>
                    <li><a href="index.php?halaman=datapengguna"><i class="fa fa-dashboard fa-3x"></i> Data Pengguna</a></li>
                    <li><a href="index.php?halaman=riwayat"><i class="fa fa-dashboard fa-3x"></i> Rekam Medis Pengguna</a></li>
                    <li><a href="index.php?halaman=konten"><i class="fa fa-dashboard fa-3x"></i> Konten</a></li>
                    <li><a href="index.php?halaman=keluar"><i class="fa fa-dashboard fa-3x"></i> Keluar</a></li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "reservasi") {
                        include 'reservasi.php';
                    } elseif ($_GET['halaman'] == "datapengguna") {
                        include 'datapengguna.php';
                    } elseif ($_GET['halaman'] == "konten") {
                        include 'konten.php';
                    } elseif ($_GET['halaman'] == "riwayat") {
                        include 'riwayat.php';
                    } elseif ($_GET['halaman'] == "keluar") {
                        include 'keluar.php';
                    }
                } else {
                    include 'beranda.php';
                }
                ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>