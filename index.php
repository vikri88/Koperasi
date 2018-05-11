<?php 
	include 'koneksi.php';
?>
<html>
<head>
	<title>Koperasi Simpan Ilang</title>
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sisi.css">
	<link rel="stylesheet" type="text/css" href="css/sisi2.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="css/register2.css">
	<script src="js/slideheader.js"></script>
	<script src="js/slide.js"></script>
	<script src="js/slidebutton.js"></script>
	<script src="js/login.js"></script>
	<script src="js/bajingan.js"></script>
	<script src="js/validasi.js"></script>
</head>
<body style="background-image: url('img/shades.jpg');">
	<?php 
		include 'rangka/header.php';
		include 'rangka/sisi.php';
		include 'rangka/login.php';
		include 'rangka/register.php';
		if (isset($_SESSION['edit'])) {
			include 'rangka/edit.php';
		} else if (isset($_SESSION['bayar'])) {
			include 'rangka/bayar.php';
		} else if (isset($_SESSION['ambil'])) {
			include 'rangka/form_ambil.php';
		}
	 ?>
	 <br>
	 <div class="body">
	 <center>
	 	<?php
	 		if (isset($_SESSION['admin'])) {
	 			include 'rangka/dashboard.php';
	 			include 'rangka/tabel/tabel_anggota.php';
	 			include 'rangka/form_Simpan.php';
	 			include 'rangka/tabel/tabel_pinjam.php';
	 			include 'rangka/tabel/tabel_pinjamm.php';
	 		 } else if (isset($_SESSION['anggota'])) {
	 		 	include 'rangka/form_pinjam.php';
	 		 	include 'rangka/tabel/tabel_simpanan.php';
	 		 }
	 	 ?>
	 </center>	
	 </div>
</body>
</html>