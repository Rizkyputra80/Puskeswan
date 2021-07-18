<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "puskeswan");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="admin/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Form Login</strong>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" name="user" value="Masukan NIK anda" maxlength="16" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="pass" maxlength="20" required />
                            </div>

                            <button class="btn btn-primary btn-block" name="login">Login</button>
                            <hr />
                            Belum Punya akun ? <a href="Daftar.php"> Buat disini </a>
                        </form>
                        <?php
                        if (isset($_POST['login'])) {
                            $ambil = $koneksi->query("SELECT * FROM user WHERE nik ='$_POST[user]'
                                        AND password_user = '$_POST[pass]'");

                            if (mysqli_num_rows($ambil) > 0) {
                                $a = mysqli_fetch_object($ambil);
                                $_SESSION['login'] = true;
                                $_SESSION['id_user'] = $a->id_user;
                                $_SESSION['nama'] = $a->nama;
                                $_SESSION['alamat'] = $a->alamat;
                                $_SESSION['telp'] = $a->telp;
                                echo "<div class='alert-info'>Login Berhasil</div>";
                                echo "<script>location='reservasi.php';</script>";
                            } else {
                                echo "<div class='alert-danger'>Login Gagal</div>";
                                echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                            }
                        }
                        ?>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>