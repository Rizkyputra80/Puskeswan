<h2>Data Pengguna</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                <center>No</center>
            </th>
            <th>
                <center>NIK</center>
            </th>
            <th>
                <center>Nama</center>
            </th>
            <th>
                <center>Jenis Kelamin</center>
            </th>
            <th>
                <center>Tanggal Lahir</center>
            </th>
            <th>
                <center>Agama</center>
            </th>
            <th>
                <center>No.Telp</center>
            </th>
            <th>
                <center>Alamat</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM user"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>

                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nik']; ?></td>
                <td><?php echo $pecah['nama']; ?></td>
                <td><?php echo $pecah['jk']; ?></td>
                <td><?php echo $pecah['tgl_lahir']; ?></td>
                <td><?php echo $pecah['agama']; ?></td>
                <td><?php echo $pecah['telp']; ?></td>
                <td><?php echo $pecah['alamat']; ?></td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>