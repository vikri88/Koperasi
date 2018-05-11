<?php 
	include '../koneksi.php';
	
	$id = $_GET['id'];
	$date = date('y-m-d');

	$cek = mysql_query("SELECT * FROM angsuran");
	$cekid = mysql_fetch_array($cek);
	$idangsuran = $cekid['id_angsuran'] + 1;

	$sql = mysql_query("UPDATE pinjaman SET tanggal_acc='$date', id_angsuran='$idangsuran'WHERE id_pinjaman='$id'");
	if ($sql) {
		echo "<script>alert('berhasil');window.location='../index.php'</script>";
	} else {
		echo "<script>alert('gagal');window.location='../index.php'</script>";
	}	
?>