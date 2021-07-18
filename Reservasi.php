<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION["login"])) {
    echo "<script>alert('Login dulu');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}
?>

<?php
if (isset($_POST['daftar'])) {
    $getmaxid = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM 
pendaftaran");
    $d = mysqli_fetch_object($getmaxid);
    $generateid = 'P' . date('Y') . sprintf("%05s", $d->id + 1);

    $insert = mysqli_query($conn, "INSERT INTO pendaftaran VALUES (
    '" . $generateid . "',
    '" . date('y-m-d') . "',
    '" . $_POST['nama_hewan'] . "',
    '" . $_POST['jenis_hewan'] . "',
    '" . $_POST['umur_hewan'] . "',
    '" . $_POST['jk'] . "'
    )");
    if ($insert) {
        echo '<script>window.location="berhasil.php?id=' . $generateid . '"</script>';
    } else {
        echo 'huft' . mysqli_error($conn);
    }
}
?>


<html lang="en">

<head>
    <title>Pendaftaran Akun Puskeswan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/berhasil.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <h1 class="panel-title">Daftar</h1>
                </div>
                <div class="panel-body">
                    <br>
                    <br>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Reservasi</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Nama Hewan</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama_hewan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Jenis Hewan</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="jenis_hewan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Umur hewan</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="umur_hewan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Jenis Kelamin Hewan</label>
                                    <div class="col-md-2">
                                        <input type="radio" name="jk" class="input-control" value="Laki-Laki"> Laki-Laki &nbsp; &nbsp;
                                        <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-7">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-md-2">
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