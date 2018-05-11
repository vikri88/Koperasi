<?php 
	include '../koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$nama = $_POST['nama'];
	$nama_panjang = $_POST['nama_panjang'];
	$tanggal = $_POST['tanggal'];
	$tempatlahir = $_POST['tempatlahir'];
	$notel = $_POST['notel'];
	$alamat = $_POST['alamat'];
	$jenis = $_POST['jk'];

	$lokasi_file = $_FILES['fuckkkk']['tmp_name'];
	$tipe_file   = $_FILES['fuckkkk']['type'];
	$nama_file   = $_FILES['fuckkkk']['name'];
	$direktori   = "../profilepic/$nama_file";
	$nama_lengkap = $nama." ".$nama_panjang;

	if (!empty($lokasi_file)) {
   		move_uploaded_file($lokasi_file,$direktori); 
   
	    $sql = "INSERT INTO anggota values ('','$nama_lengkap','username','$password','$alamat','$tanggal','$tempatlahir','$jenis','Aktif','$notel','$nama_file','-')";
	    $aksi = mysql_query($sql);

    	if (!$aksi) {
	    	echo "maaf gagal memasukan gambar";
	    } else{
	        echo "<script>alert('berhasil');window.location='../index.php'</script>";
	    }
	}else{
		echo "terjadi kesalahan";  
	}
 ?>