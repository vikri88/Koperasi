<div id="tabel_pinjam" style="display: none;">
	<h2>Tabel Request Pinjam</h2>
	<table>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Nama Pinjaman</th>
			<th>Pinjaman</th>
			<th>Tanggal Pengajuan</th>
			<th>Tenor</th>
			<th>Aksi</th>
		</tr>
		<?php
			$no = 1;
			$sql = mysql_query("SELECT * FROM pinjaman INNER JOIN anggota ON pinjaman.id_anggota=anggota.id_anggota INNER JOIN kategori_pinjaman ON pinjaman.id_kategori=kategori_pinjaman.id_kategori_pinjaman WHERE tanggal_acc='0000-00-00'");
			while ($data = mysql_fetch_array($sql)) { ?>
			<tr>
				<td width="5%"><?php echo $no++ ?></td>
				<td width=""><?php echo $data['nama']; ?></td>
				<td width=""><?php echo $data['nama_pinjaman']; ?></td>
				<td width=""><?php echo $data['besar_pinjaman']; ?></td>
				<td><?php echo $data['tanggal_pengajuan_pinjaman']; ?></td>
				<td><?php echo $data['tenor']." Bulan"; ?></td>
				<td width="25%">
					<a href="fungsi/acc.php?id=<?php echo $data['id_pinjaman']; ?>"><button>Acc</button></a>
					<a href="fungsi/batal.php?id=<?php echo $data['id_pinjaman']; ?>"><button>Batal</button></a>
				</td>
			</tr>	
		<?php } ?>
	</table>
</div>