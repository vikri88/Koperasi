<?php 
    $id = $_GET['id'];
    $sql = mysql_query("SELECT * FROM pinjaman INNER JOIN anggota ON pinjaman.id_anggota=anggota.id_anggota WHERE id_pinjaman='$id'");
    $data = mysql_fetch_array($sql);
    $idket = $data['id_kategori'];
    $idang = $data['id_anggota'];
    $besarangsuran = $data['besar_pinjaman']/$data['tenor'];
 ?>
<div class="register" id="bayarbox" style="display: block;">
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
        <?php 
            $tgl = $data['tanggal'];
            $tgl2 = date('M');

            $cek = mysql_query("SELECT max(angsuran.angsuran_ke) FROM angsuran INNER JOIN pinjaman ON angsuran.id_angsuran=pinjaman.id_angsuran WHERE angsuran.id_angsuran='$id'");
            $dat = mysql_fetch_array($cek);
            $ceklagi = mysql_num_rows($cek);

            if ($ceklagi > 0) {
                $angsuran_ke = $dat['angsuran_ke'] + 1;
            } else {
                $angsuran_ke = 1;
            }
         ?>
        <option value="Aktif"><?php echo "Bulan ".$tgl2; ?></option>
      </select>
      <center>
        <button type="submit" name="btnbayar" style="width: 48%;">Bayar</button>
        <button type="submit" name="btnbatal" style="width: 48%;">Batal</button>
      </center>
    </div>
  </form>
</div>
<?php 
  if (isset($_POST['btnbayar'])) {
    $sql = mysql_query("INSERT INTO angsuran VALUES('$id', '$idket', '$idang', NOW(), '$angsuran_ke', '$besarangsuran', '-')");
    $yy = mysql_query("SELECT * FROM pinjaman WHERE id_pinjaman='$id'");
    $yyy = mysql_fetch_array($yy);
    $tenor = $yyy['tenor'] - 1;

    if ($tenor = $yyy['tenor'] - 1 == 0) {
        $sql7 = mysql_query("DELETE FROM pinjaman WHERE id_pinjaman='$id'");
        $sql8 = mysql_query("DELETE FROM angsuran WHERE id_angsuran='$id'");
        session_start();
        unset($_SESSION['bayar']);
        echo "<script>alert('hutang anda lunas');</script>";
    }

    if ($sql) {
      $sql2 = mysql_query("UPDATE pinjaman SET tenor='$tenor'");
      $sql5 = mysql_query("SELECT * FROM pinjaman WHERE tenor='0' WHERE id_pinjaman='$id'");
      $sql6 = mysql_num_rows($sql5);
      
      session_start();
      unset($_SESSION['bayar']);
      echo "<script>alert('berhasil update');window.location='index.php'</script>";
      
    } else {
      echo "<script>alert('gagal update');window.location='index.php?id=".$id."'</script>";
    }
  } else if(isset($_POST['btnbatal'])){
    session_start();
    unset($_SESSION['bayar']);
    header("location: index.php");
  }
?>
