<h2>Rekam Medis Pengguna</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                <center>No</center>
            </th>
            <th>
                <center>ID Rekam Medis</center>
            </th>
            <th>
                <center>Kode Pendaftaran</center>
            </th>
            <th>
                <center>Nama <br>Pendaftar</center>
            </th>
            <th>
                <center>Tanggal Daftar</center>
            </th>
            <th>
                <center>Nama Hewan</center>
            </th>
            <th>
                <center>Jenis Hewan</center>
            </th>
            <th>
                <center>Umur Hewan</center>
            </th>
            <th>
                <center>Jenis Kelamin Hewan</center>
            </th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM riwayat"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>

                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['id_riwayat']; ?></td>
                <td><?php echo $pecah['kode_pendaftaran2']; ?></td>
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
    <div class="form-group">
        <div class="col-md-2 col-md-offset-10">
            <button class="btn btn-primary btn-block" name="Print">PRINT</button>
            <br>
        </div>
    </div>