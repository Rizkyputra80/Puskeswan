<?php include 'koneksi.php'; ?>
<?php
        if (isset($_POST["daftar"]))
        {
            $nama = $_POST["nama"];
            $tgl = $_POST["tgl"];
            $tmp = $_POST["tmp"];
            $jk = $_POST["jk"];
            $telp = $_POST["telp"];
            $agama = $_POST["agama"];
            $alamat = $_POST["alamat"];
            $nik = $_POST["nik"];
            $pass = $_POST["pass"];

            //cek akun udah ada apa belom, kalo belom berarti gagal
            $ambil =$conn->query("SELECT*FROM user
            WHERE nik='$nik'");
            $yangcocok = $ambil->num_rows;
            if ($yangcocok==1)
            {
                echo "<script>alert('NIK SUDAH DIGUNAKAN');</script>";
                echo "<script>location='daftar.php';</script>";
            }
            else 
            {
                //bisa daftar akun
                $conn->query("INSERT INTO user
                (nik,password_user,nama,tgl_lahir,tmp_lahir,jk,agama,telp,alamat)
                VALUES('$nik','$pass','$nama','$tgl','$tmp','$jk','$agama','$telp','$alamat')");
                echo "<script>alert('Berhasil daftar');</script>";
                echo "<script>location='login.php';</script>";    
        }
        }
        ?>
<html lang="en">
<head>
    <title>Pendaftaran Akun Puskeswan</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
<?php include 'navbar.php';?>

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
            <h3 class="panel-title">Pendaftaran Akun Baru</h3>
        </div>
        
<div class="panel-body">
    <form method="post" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-3">Nama legkap</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="nama" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Lahir</label>
            <div class="col-md-7">
                <input type="date" class="form-control" name="tgl" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tempat Lahir</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="tmp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Jenis Kelamin</label>
            <div class="col-md-2">
               <input type="radio" name="jk" class="input-control" value="Laki-Laki"> Laki-Laki &nbsp; &nbsp;
               <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">NO.TELP</label>
            <div class="col-md-7">
                <input type="number" class="form-control" name="telp" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Agama</label>
            <div class="col-md-2">
            <select class="form-select form-select-sm" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Alamat</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="alamat" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">NIK</label>
            <div class="col-md-7">
                <input type="number" class="form-control" name="nik" required>
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