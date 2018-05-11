<div class="register" id="registerbox">
	<form class="register-modal-content animate" enctype="multipart/form-data" method="post" action="fungsi/register.php">
    <div class="register-imgcontainer">
      <span onclick="document.getElementById('registerbox').style.display='none'" class="register-close" title="Close Modal">&times;</span>
        <div class="registershit">
            <div class="rs1" id="jerk">
              <h2>Akun</h2> 
            </div>
            <div class="rs1" id="jerk2" style="margin-left: 14px;">
              <h2>Biodata</h2> 
            </div>
        </div>
    </div>

    <div class="register-container" id="loginan">
      <input type="text" placeholder="Masukan Username" name="username" required>
      <input type="password" placeholder="Masukan Password" name="password" required>
      <input type="password" placeholder="Masukan Ulang Password" name="password2" required>
    </div >
    <div class="register-container" id="logan" style="display: block;">
      <input type="text" id="nama" placeholder="Nama" name="nama" required style="width: 100%;">
      <input type="text" id="nama_panjang" placeholder="Kepanjangan" name="nama_panjang" required style="width: 100%;">
      <input type="date" name="tanggal" required style="width: 47%;">
      <input type="text" placeholder="tempatlahir" name="tempatlahir" required style="width: 50%; float: right;">
      <select name="jk" style="width: 47%">
        <option value="Pria">Pria Sejati</option>
        <option value="Wanita">Wanita Idaman</option>
      </select>
      <input type="text" id="telepon" placeholder="No. Telepon" name="notel" required style="width: 50%; float: right;">
      <input type="file" name="fuckkkk">
      <textarea name="alamat" placeholder="Alamat"></textarea>
        
      <button type="submit" onclick="validasi()">Register</button>
    </div>
  </form>
</div>
