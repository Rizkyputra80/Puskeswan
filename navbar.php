<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Puskeswan</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
</head>

<body>
	<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="logo">
					<img src="logo.png" class="lambang">
					<a href="#">PUSKESWAN</a>
				</div>
				<nav>
					<a href="index.php">Beranda</a>
					<a href="Reservasi.php">Reservasi</a>
					<?php if (isset($_SESSION["login"])) : ?>
						<a href="riwayat.php">Rekam Medis</a>
						<a href="keluar.php">Keluar</a>
					<?php else : ?>
						<a href="login.php">Login</a>
						<a href="Daftar.php">Buat Akun</a>
					<?php endif ?>


				</nav>
			</div>
		</header>
</body>