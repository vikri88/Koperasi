<?php  
	$ie = $_SESSION['anggota'];
	$ide = mysql_query("SELECT * FROM anggota WHERE username='$id'");
	$dat = mysql_fetch_array($ide);
	$id = $dat['id_anggota'];
 ?>
<div class="register" id="pinjambox" style="display: none;">
	<form class="register-modal-content animate" action="fungsi/pinjam.php" method="POST">
    <div class="register-imgcontainer">
    	<span onclick="document.getElementById('pinjambox').style.display='none'" class="register-close" title="Close Modal">&times;</span>
        <div class="registershit">
            <div class="rs1" id="jerk">
              <h2>Pinjam Uang</h2> 
            </div>
        </div>
    </div>
    <div class="register-container" id="logan" style="display: block;">
	    <select name="nama_anggota" style="width: 100%">
    <?php 
    	include 'koneksi.php';
    	$sql = mysql_query("SELECT * FROM anggota WHERE id_anggota='$id'");
     	while ($data = mysql_fetch_array($sql)) { ?>	
	        <option value="<?php echo $data['id_anggota']; ?>"><?php echo $data['nama']; ?></option>
     <?php } ?>
	   	</select>
	   	<select name="kategori_pinjaman">
	   		<option disabled>Nama Pinjaman</option>
	   		<?php 
	   			$sql = mysql_query("SELECT * FROM kategori_pinjaman");
	   			while ($datum = mysql_fetch_array($sql)) { ?>
	   				<option value="<?php echo $datum['id_kategori_pinjaman']; ?>"><?php echo $datum['nama_pinjaman']; ?></option>
	   		<?php } ?>
	   	</select>
	   	<input type="text" name="besar_pinjaman" placeholder="Besar Pinjaman">
	   	<select name="tenor">
	   		<option disabled>- Tenor- </option>
	   		<option value="1">1 bulan</option>
	   		<option value="3">3 bulan</option>
	   		<option value="6">6 bulan</option>
	   		<option value="12">12 bulan</option>
	   	</select>
	   	<input type="text" name="keterangan" placeholder="keterangan">
	     <center>
	       <button type="submit" id="simpan" style="width: 100%;">Simpan</button>
	     </center>
    </div>
  </form>
</div>