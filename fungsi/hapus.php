<?php 
	include '../koneksi.php';
	$id = $_GET['id'];
	$sql = mysql_query("DELETE FROM anggota WHERE id_anggota='$id'");
	if ($sql) {
		echo "<script>alert('berhasil');window.location='../index.php'</script>";
	} else {
		echo "<script>alert('gagal');window.location='../index.php'</script>";
	}
 ?>