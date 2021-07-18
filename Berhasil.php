<?php
session_start();
include 'koneksi.php';

//Hewannya
$ambil1 = $conn->query("SELECT*FROM pendaftaran WHERE id_pendaftaran = '" . $_GET['id'] . "'  ");
$p = mysqli_fetch_object($ambil1);
?>
<?php
if (isset($_POST['cetak'])) {
    $getmaxid = mysqli_query($conn, "SELECT MAX(RIGHT(id_riwayat, 5)) AS id FROM 
riwayat");
    $d = mysqli_fetch_object($getmaxid);
    $generateid = 'R' . date('Y') . sprintf("%05s", $d->id + 1);
    $insert = mysqli_query($conn, "INSERT INTO riwayat VALUES (
        '" . $generateid . "',
    '" . $_POST['id_user'] . "',
    '" . $_POST['nama_user'] . "',
    '" . $_POST['alamat_user'] . "',
    '" . $_POST['telp'] . "',
    '" . $_POST['kode'] . "',
    '" . $_POST['nama_hewan'] . "',
    '" . $_POST['jenis_hewan'] . "',
    '" . $_POST['umur_hewan'] . "',
    '" . $_POST['jk_hewan'] . "',
    '" . $_POST['tgl'] . "'
    )");
    if ($insert) {
        echo '<script>window.location="cetak.php?id=' . $generateid . '"</script>';
    } else {
        echo 'huft' . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="css/berhasil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
</head>


<body>
    <form method="post" class="form-horizontal">
        <section class="box-formulir">
            <h2>Pendaftaran Berhasil !</h2>
            <div class="box">
                <h4>Kode pendaftaran anda adalah : <input type="text" name="kode" value="<?php echo $_GET['id'] ?>"></h4>

                <br>
                <h4>Data Diri Anda :</h4>
                <div class="form-group">
                    <label class="control-label col-md-3">ID Anda :</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="id_user" value="<?php echo $_SESSION["id_user"]; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Nama Anda :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="nama_user" value="<?php echo $_SESSION["nama"]; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Alamat :</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="alamat_user" value="<?php echo $_SESSION["alamat"]; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">No.Telp :</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="telp" value="<?php echo $_SESSION["telp"]; ?>" readonly>
                    </div>
                </div>
                <br>
                <h4>Data Hewan :</h4>

                <div class="form-group">
                    <label class="control-label col-md-3">Nama Hewan :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="nama_hewan" value="<?php echo $p->nama_hewan ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Hewan :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="jenis_hewan" value="<?php echo $p->jenis_hewan ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Umur Hewan :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="umur_hewan" value="<?php echo $p->umur_hewan ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Kelamin :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="jk_hewan" value="<?php echo $p->jk_hewan ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tanggal Daftar :</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="tgl" value="<?php echo $p->tgl_pendaftaran ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-7 col-md-offset-3">
                        <button class="btn btn-info btn-block" name="cetak">Cetak Bukti Pendaftaran</button>
                    </div>
                </div>
        </section>