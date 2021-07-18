<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Puskeswan</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
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
		<br>
		<br><br><br><br><br>
		<div class="banner-areawan"></div>
		<div class="content-areawan">
			<div class="wrapperwan">
				<h2>Mading Puskeswan</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, esse est iste magni reprehenderit saepe sint! Assumenda consectetur fugit sit tempore. Architecto blanditiis deleniti, est fuga iusto perspiciatis suscipit voluptatibus! Ad alias assumenda autem deleniti esse est excepturi hic itaque, magnam magni nam officia provident quae recusandae reiciendis rem sed. Adipisci animi aut autem deserunt dolore, ea eius error ex facilis inventore ipsum minus modi nihil nostrum nulla, obcaecati porro reprehenderit repudiandae sed sint sunt tempore vero. At dolores doloribus, dolorum ea eaque hic ipsa iusto libero minus natus neque nisi nobis nostrum odio optio pariatur perspiciatis praesentium rerum sapiente.</p>
			</div>
			<div class="wrapperwan">
				<h2>Lokasi</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7931.529940530713!2d106.69260277235392!3d-6.294587617591138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fac6e1fdc367%3A0xbafd975f84a7c205!2sPuskeswan%20Tangerang%20Selatan!5e0!3m2!1sen!2sid!4v1626412381390!5m2!1sen!2sid" width="1000" height="450" style="border: 0;;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="footer">
				<h2>Mading Puskeswan</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, esse est iste magni reprehenderit saepe sint! Assumenda consectetur fugit sit tempore. Architecto blanditiis deleniti, est fuga iusto perspiciatis suscipit voluptatibus! Ad alias assumenda autem deleniti esse est excepturi hic itaque, magnam magni nam officia provident quae recusandae reiciendis rem sed. Adipisci animi aut autem deserunt dolore, ea eius error ex facilis inventore ipsum minus modi nihil nostrum nulla, obcaecati porro reprehenderit repudiandae sed sint sunt tempore vero. At dolores doloribus, dolorum ea eaque hic ipsa iusto libero minus natus neque nisi nobis nostrum odio optio pariatur perspiciatis praesentium rerum sapiente.</p>
			</div>
		</div>
	</div>
</body>

</html>