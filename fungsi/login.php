<?php
	include '../koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysql_query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
	$sql2 = mysql_query("SELECT * FROM anggota WHERE username='$username' AND password='$password'");

	$row = mysql_num_rows($sql);
	$row2 = mysql_num_rows($sql2);

	if ($row > 0):
		session_start();
		$_SESSION['berhasil'];
		$_SESSION['admin'] = $username;
		header("location: ../index.php");
	elseif ($row2 > 0):
		session_start();
		$_SESSION['berhasilanggota'];
		$_SESSION['anggota'] = $username;
		header("location: ../index.php");
	else:
		session_start();
		$_SESSION['gagal'];
		header("location: ../index.php");
	endif	
 ?>