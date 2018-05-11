<div class="register" id="ambilbox" style="display: block;">
	<form class="register-modal-content animate" enctype="multipart/form-data" method="post">
    <div class="register-imgcontainer">
        <div class="registershit">
            <div class="rs1" id="jerk">
              <h2>Bayar Hutang</h2> 
            </div>
        </div>
    </div>
    <div class="register-container" id="logan" style="display: block;">
      <input disabled type="text" value="<?php echo $data['nama']; ?>" id="nama" placeholder="Nama" name="nama" required style="width: 100%;">
      <select name="status" style="width: 100%">
        
        <option value="Aktif"><?php echo "Bulan ".$tgl2; ?></option>
      </select>
      <center>
        <button type="submit" name="btnbayar" style="width: 48%;">Bayar</button>
        <button type="submit" name="btnbatal" style="width: 48%;">Batal</button>
      </center>
    </div>
  </form>
</div>
