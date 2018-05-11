<?php  
	include '../koneksi.php';
	session_start();
	$ie = $_SESSION['anggota'];
	$ide = mysql_query("SELECT * FROM anggota WHERE username='$ie'");
	$dat = mysql_fetch_array($ide);
	$id = $dat['id_anggota'];

	$kat_pinjaman = $_POST['kategori_pinjaman'];
	$besar_pinjaman = $_POST['besar_pinjaman'];
	$tenor = $_POST['tenor'];
	$keterangan = $_POST['keterangan'];

	$kat = mysql_query("SELECT * FROM kategori_pinjaman WHERE id_kategori_pinjaman='$kat_pinjaman'");
	$kata = mysql_fetch_array($kat);
	$nakat = $kata['nama_pinjaman'];

	$date = date("y-m-d");

	$cek = mysql_query("SELECT * FROM pinjaman WHERE id_anggota='$id'");
	$row = mysql_num_rows($cek);

	if ($row > 0) {
		echo "<script>alert('hayoh weh nginjem dasar orang indo');window.location='../index.php'</script>";
	} else {
		$sql = mysql_query("INSERT INTO pinjaman VALUES('', '$kat_pinjaman', '$nakat', '$id', '$besar_pinjaman', '$date', '', '$date', '', '$tenor', '', '$keterangan')");
		if ($sql) {
			echo "<script>alert('berhasil');window.location='../index.php';</script>";
		} else {
			echo "<script>alert('gagal');</script>";
		}
	}


 ?>