<?php
	session_start();
	if (isset($_SESSION['admin'])) {
		unset($_SESSION['admin']);
		unset($_SESSION['berhasil']);
	} else if (isset($_SESSION['anggota'])) {
		unset($_SESSION['anggota']);
		unset($_SESSION['berhasilanggota']);
	} 
	header("location: ../index.php");
 ?>