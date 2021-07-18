<?php
session_start();
include 'koneksi.php';
//login session
$ambil = $conn->query("SELECT*FROM user");
$pecah = $ambil->fetch_assoc();
//Hewannya
$ambil1 = $conn->query("SELECT*FROM riwayat");
$p = mysqli_fetch_object($ambil1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Puskeswan Online</title>
    <link rel="stylesheet" href="css/berhasil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>


<body>

    <h2>Pendaftaran Berhasil !</h2>
    <div class="box">
        <h4>Kode pendaftaran anda adalah : <?php echo $p->kode_pendaftaran2 ?></h4>
        <form method="post" class="form-horizontal">
            <section class="box-formulir">
                <br>
                <h4>Data Diri Anda :</h4>
                <div class="form-group">
                    <label class="control-label col-md-3">Nama Anda :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="nama_user" value="<?php echo $pecah["nama"]; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Alamat :</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="alamat_user" value="<?php echo $pecah["alamat"]; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">No.Telp :</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="telp" value="<?php echo $pecah["telp"]; ?>" readonly>
                    </div>
                </div>

                <br>
                <h4>Data Hewan :</h4>

                <div class="form-group">
                    <label class="control-label col-md-3">Nama Hewan :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="nama_hewan" value="<?php echo $p->nama_hewan2 ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Hewan :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="jenis_hewan" value="<?php echo $p->jenis_hewan2 ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Umur Hewan :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="umur_hewan" value="<?php echo $p->umur_hewan2 ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Kelamin :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="jk_hewan" value="<?php echo $p->jenis_kelamin2 ?>" readonly>
                    </div>
                </div>

            </section>