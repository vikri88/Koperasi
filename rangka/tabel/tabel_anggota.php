<div id="tabel_anggota" style="display: none;">
	<h2>Tabel Anggota</h2>
	<table>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>TTL</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
			<th>No. Telepon</th>
			<th>Aksi</th>
		</tr>
		<?php
			$no = 1;
			$sql = mysql_query("SELECT * FROM anggota");
			while ($data = mysql_fetch_array($sql)) { ?>
			<tr>
				<td width="5%"><?php echo $no++ ?></td>
				<td width="10%"><?php echo $data['nama']; ?></td>
				<td width="20%"><?php echo $data['alamat']; ?></td>
				<td width="18%"><?php echo $data['tempat_lahir'].", ".$data['tanggal_lahir']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['status']; ?></td>
				<td><?php echo $data['no_telepon']; ?></td>
				<td width="20%">
					<a href="fungsi/hapus.php?id=<?php echo $data['id_anggota']; ?>"><button>Hapus</button></a>
					<a href="fungsi/edit.php?id=<?php echo $data['id_anggota']; ?>"><button onclick="document.getElementById('editbox').style.display='block'">Edit</button></a>
				</td>
			</tr>	
		<?php } ?>
	</table>
</div>