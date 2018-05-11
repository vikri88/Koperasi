<?php  
	include '../koneksi.php';
	$id = $_GET['id'];
	$sql = mysql_query("DELETE FROM pinjaman WHERE id_pinjaman='$id'");
	if ($sql) {
		echo "<script>alert('berhasil');window.location='../index.php'</script>";
	} else {
		echo "<script>alert('gagal dihapus');window.location='../index.php'</script>";
	}
 ?>