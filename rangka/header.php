<?php 
	session_start(); 
	include 'koneksi.php';
?>
<div class="header">
	<div class="h1">
		<h2> Koperasi</h2>
	</div>
	<div class="h15">
		<h2>Simpan Ilang</h2>
	</div>
	<?php if (isset($_SESSION['admin'])):
		$id = $_SESSION['admin'];
		$sql = mysql_query("SELECT * FROM petugas WHERE username='$id'");
		$data = mysql_fetch_array($sql);
	 ?>
		<div class="h2">
			<div class="foto" onclick="myFunction()" style="background-image: url('profilepic/<?php echo $data['foto']; ?>');"></div>
			<div class="shit">
				<p><?php echo $data['nama']; ?></p>
			</div>
		</div>
		<div id="myDropdown" class="dropdown-content">
		 	<a href="edit.php">
			   Edit Profile
			   <img src="img/edit.png" width="20" align="top">
			</a>
		   	<a href="fungsi/logout.php">
		   		Logout
		   		<img src="img/logout.png" width="20" align="top">
		   	</a>
		 </div>
	<?php elseif (isset($_SESSION['anggota'])): 
		$id = $_SESSION['anggota'];
		$sql = mysql_query("SELECT * FROM anggota WHERE username='$id'");
		$data = mysql_fetch_array($sql);
		$idanggota = $data['id_anggota'];
	?>
		<div class="h2">
			<div class="foto" onclick="myFunction()" style="background-image: url('profilepic/<?php echo $data['foto']; ?>');"></div>
			<div class="shit">
				<p><?php echo $data['nama']; ?></p>
			</div>
		<div id="myDropdown" class="dropdown-content">
		 	<a href="edit.php">
			   Edit Profile
			   <img src="img/edit.png" width="20" align="top">
			</a>
		   	<a href="fungsi/logout.php">
		   		Logout
		   		<img src="img/logout.png" width="20" align="top">
		   	</a>
		 </div>
		</div>
	<?php endif ?>
</div>
