<?php 
	include '../koneksi.php';
	$id = $_POST['id'];
	$nama_simpanan = $_POST['nama_simpanan'];
	$besar_simpanan = $_POST['besar_simpanan'];
	$ket = $_POST['keterangan'];
	$tgl = date('y-m-d');

	$sql = mysql_query("INSERT INTO simpanan VALUES ('', '$nama_simpanan', '$id', '$tgl', '$besar_simpanan', '$ket')");
	if ($sql) {
		echo "<script>alert('berhasil');window.location='../index.php';</script>";
	} else {
		echo "<script>alert('gagal');window.location='../index.php'</script>";
	}
 ?>