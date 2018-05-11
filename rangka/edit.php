<?php 
    $id = $_GET['id'];
    $sql = mysql_query("SELECT * FROM anggota WHERE id_anggota='$id'");
    $data = mysql_fetch_array($sql);
 ?>
<div class="register" id="editbox" style="display: block;">
	<form class="register-modal-content animate" enctype="multipart/form-data" method="post">
    <div class="register-imgcontainer">
        <div class="registershit">
            <div class="rs1" id="jerk">
              <h2>Edit Status</h2> 
            </div>
        </div>
    </div>
    <div class="register-container" id="logan" style="display: block;">
      <input disabled type="text" value="<?php echo $data['nama']; ?>" id="nama" placeholder="Nama" name="nama" required style="width: 100%;">
      <select name="status" style="width: 100%">
        <option value="Aktif">Aktif</option>
        <option value="Non Aktif">Non Aktif</option>
      </select>
      <center>
        <button type="submit" name="btnupdate" style="width: 48%;">Update</button>
        <button type="submit" name="btnbatal" style="width: 48%;">Batal</button>
      </center>
    </div>
  </form>
</div>
<?php 
  if (isset($_POST['btnupdate'])) {
    $status = $_POST['status'];
    $sql = mysql_query("UPDATE anggota SET status='$status' WHERE id_anggota='$id'");
    if ($sql) {
      session_start();
      unset($_SESSION['edit']);
      echo "<script>alert('berhasil update');window.location='index.php'</script>";
    } else {
      echo "<script>alert('gagal update');window.location='index.php?id=".$id."'</script>";
    }
  } else if(isset($_POST['btnbatal'])){
    session_start();
    unset($_SESSION['edit']);
    header("location: index.php");
  }
?>
