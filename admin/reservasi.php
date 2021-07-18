<h2>Reservasi Hari ini</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Nama Hewan</th>
            <th>Jenis Hewan</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM pendaftaran"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>

                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['id_pendaftaran']; ?></td>
                <td><?php echo $pecah['tgl_pendaftaran']; ?></td>
                <td><?php echo $pecah['nama_hewan']; ?></td>
                <td><?php echo $pecah['jenis_hewan']; ?></td>
                <td><?php echo $pecah['umur_hewan']; ?></td>
                <td><?php echo $pecah['jk_hewan']; ?></td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
    <div class="form-group">
        <div class="col-md-2 col-md-offset-10">
            <a href="hapus.php" class="btn btn-warning btn-block">Bersihkan Semua</a>
            <br>
        </div>
    </div>