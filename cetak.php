<?php
session_start();
include 'koneksi.php';
//login session
$ambil = $conn->query("SELECT*FROM user");
$pecah = $ambil->fetch_assoc();
//Hewannya

$ambil1 = $conn->query("SELECT*FROM riwayat WHERE id_riwayat = '" . $_GET['id'] . "'  ");
$p = mysqli_fetch_object($ambil1);

?>
<!DOCTYPE html>
<html>

<head>

    <title>Reservasi Puskeswan Online</title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
    <script>
        window.print();
    </script>
</head>

<body>
    <center>
        <table>
            <tr>
                <td><img src="logo.png" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="4">DINAS PERTERNAKAN & KESEHATAN HEWAN</font><br>
                        <font size="5"><b>PUSKESWAN JOMBANG</b></font><br>
                        <font size="2">Pusat Kesehatan Hewan dan Ternak Kota Tangerang Selatan</font><br>
                        <font size="2"><i>Jombang, Kec. Ciputat, Kota Tangerang Selatan, Banten Kode Pos : 15414 Telp./Fax (0821)6701-0114</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>

        <table width="625">
            <tr>
                <td>
                    <font size="4">Bukti Pendaftaran Online<br>Pusat Kesehatan Hewan & Ternak Jombang.<br><br>Kode Pendaftaran Anda : <?php echo $p->kode_pendaftaran2 ?></font>
                <td align="right"><img src="barcode.png" width="180" height="160"></td>
                </td>
            </tr>
        </table>
        <br>
        <table width="640">
            <tr>
                <td>
                    <b>
                        <i>
                            <font size="4">Data diri pendaftar :</font>
                        </i>
                    </b>
                </td>
            </tr>
        </table>
        </table>
        <table>
            <tr class=" text2">
                <td>Nama Lengkap </td>
                <td width="541">: <b><?php echo $_SESSION["nama"]; ?></b></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="525">: <?php echo $_SESSION["alamat"]; ?></td>
            </tr>
            <tr>
                <td>No.Telefon</td>
                <td width="525">: <?php echo $_SESSION["telp"]; ?></td>
            </tr>
            <tr>
                <table width="640">
                    <tr>
                        <td>
                            <b>
                                <i>
                                    <font size="4">Hewan :</font>
                                </i>
                            </b>
                        </td>
                    </tr>
                    <tr class=" text2">
                        <td>Nama Hewan</td>
                        <td width="541">: <b><?php echo $p->nama_hewan2 ?></b></td>
                    </tr>
                    <tr class=" text2">
                        <td>Jenis Hewan</td>
                        <td width="541">: <?php echo $p->jenis_hewan2 ?></td>
                    </tr>
                    <tr class=" text2">
                        <td>Umur Hewan</td>
                        <td width="541">: <?php echo $p->umur_hewan2 ?></td>
                    </tr>
                    <tr class=" text2">
                        <td>Jenis Kelamin</td>
                        <td width="541">: <?php echo $p->jenis_kelamin2 ?></td>
                    </tr>
            </tr>
        </table>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Harap surat ini dibawa ketika datang ke PUSKESWAN JOMBANG. <br>
                        Berlaku sehari setelah pendaftaran online ini dibuat.<br>
                        <b>Diwajibkan untuk membawa KTP (Kartu Tanda Penduduk).</b>
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td width="430"><br><br><br><br></td>
                <td class="text" align="center">Terima Kasih.</td>
            </tr>
        </table>
    </center>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <a href="index.php">Kembali</a>

</body>

</html>