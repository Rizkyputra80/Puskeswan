<?php
$koneksi = new mysqli("localhost", "root", "", "puskeswan");
$koneksi->query("DELETE FROM pendaftaran");

echo "<script>alert('Semua Reservasi Hari Ini Telah Di Hapus');</script>";
echo "<script>location='index.php?halaman=pendaftaran';</script>";
