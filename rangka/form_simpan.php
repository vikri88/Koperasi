<div class="register" id="simpanbox" style="display: none;">
	<form class="register-modal-content animate" action="fungsi/simpan.php" method="post">
    <div class="register-imgcontainer">
    	<span onclick="document.getElementById('simpanbox').style.display='none'" class="register-close" title="Close Modal">&times;</span>
        <div class="registershit">
            <div class="rs1" id="jerk">
              <h2>Simpan Uang</h2> 
            </div>
        </div>
    </div>
    <div class="register-container" id="logan" style="display: block;">
	    <select name="id" style="width: 100%">
    <?php 
    	include '../koneksi.php';
    	$sql = mysql_query("SELECT * FROM anggota WHERE status='Aktif'");
     	while ($data = mysql_fetch_array($sql)) { ?>	
	        <option value="<?php echo $data['id_anggota']; ?>"><?php echo $data['nama']; ?></option>
     <?php } ?>
	   	</select>
	   	<select name="nama_simpanan">
	   		<option disabled>Nama Simpanan</option>
	   		<option value="pokok">Pokok</option>
	   		<option value="wajib">Wajib</option>
	   		<option value="sukarela">Sukarela</option>
	   	</select>
	   	<input type="text" name="besar_simpanan" placeholder="Besar Simpanan">
	   	<input type="text" name="keterangan" placeholder="keterangan">
	     <center>
	       <button type="submit" id="simpan" style="width: 48%;">Simpan</button>
	       <button type="submit" name="btnbatal" style="width: 48%;">Batal</button>
	     </center>
    </div>
  </form>
</div>