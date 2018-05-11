<div id="tabel_ambil" style="display: block;">
	<h2>Tabel simpanan ilang</h2>
	<table>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Nama Simpanan</th>
			<th>Tanggal Simpan</th>
			<th>Besar Simpanan</th>
			<th>Aksi</th>
		</tr>
		<?php
			$no = 1;
			$id = $_SESSION['anggota'];
			include 'koneksi.php';
			$sql = mysql_query("SELECT * FROM simpanan INNER JOIN anggota ON simpanan.id_anggota=anggota.id_anggota WHERE anggota.username='$id'");
			while ($data = mysql_fetch_array($sql)) { ?>
			<tr>
				<td width="5%"><?php echo $no++ ?></td>
				<td width=""><?php echo $data['nama']; ?></td>
				<td width=""><?php echo $data['nama_simpanan']; ?></td>
				<td width=""><?php echo $data['tanggal_simpanan']; ?></td>
				<td><?php echo $data['besar_simpanan']; ?></td>
				<td width="13%">
					<a href="fungsi/bayar.php?id=<?php echo $data['id_pinjaman']; ?>">
						<button onclick="document.getElementById('ambilbox').style.display='block'">Ambil</button>
					</a>
				</td>
			</tr>	
		<?php } ?>
	</table>
</div>