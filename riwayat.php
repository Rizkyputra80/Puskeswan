<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <title>Rekam Medis Anda</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <br><br><br><br><br><br><br>
    <i>
        <u>
            <h2>Rekam Medis Hewan Anda</h2>
        </u>
    </i>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <Center>No</Center>
                </th>
                <th>
                    <center>Nama Anda</Center>
                </th>
                <th>
                    <Center>Tanggal Berobat </Center>
                </th>
                <th>
                    <Center>Nama Hewan</Center>
                </th>
                <th>
                    <Center>Jenis Hewan</Center>
                </th>
                <th>
                    <Center>Umur Hewan</Center>
                </th>
                <th>
                    <Center>Jenis Kelamin</Center>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $id_user = $_SESSION["id_user"];

            $ambil = $conn->query("SELECT * FROM riwayat WHERE id_user2='$id_user'");
            while ($pecah = $ambil->fetch_assoc()) {
            ?>
                <tr>

                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah['nama_user2']; ?></td>
                    <td><?php echo $pecah['tanggal_pendaftaran2']; ?></td>
                    <td><?php echo $pecah['nama_hewan2']; ?></td>
                    <td><?php echo $pecah['jenis_hewan2']; ?></td>
                    <td><?php echo $pecah['umur_hewan2']; ?></td>
                    <td><?php echo $pecah['jenis_kelamin2']; ?></td>
                </tr>
                <?php $nomor++; ?>
            <?php } ?>
        </tbody>

</body>

</html>