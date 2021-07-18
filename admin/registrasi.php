<?php
$koneksi = new mysqli("localhost", "root", "", "puskeswan");
?>
<?php
if (isset($_POST["daftar"])) {
    $nama = $_POST["nama_admin"];
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    //cek akun udah ada apa belom, kalo udah ada berarti gagal
    $ambil = $koneksi->query("SELECT * FROM admin
            WHERE username='$username'");
    $yangcocok = $ambil->num_rows;
    if ($yangcocok == 1) {
        echo "<script>alert('USERNAME SUDAH DIGUNAKAN');</script>";
        echo "<script>location='daftar.php';</script>";
    } else {
        //bisa daftar akun
        $koneksi->query("INSERT INTO admin
                (nama_admin,username,password)
                VALUES('$nama','$username','$pass')");
        echo "<script>alert('Berhasil daftar');</script>";
        echo "<script>location='login.php';</script>";
    }
}
?>
<html lang="en">

<head>
    <title>Pendaftaran Akun Puskeswan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pendaftaran Akun Baru</h3>
                    </div>

                    <div class="panel-body">
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama legkap</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="nama_admin" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Username</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="pass" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button class="btn btn-primary btn-block" name="daftar">Daftar</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>