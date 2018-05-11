<div id="tabel_pinjamm" style="display: none;">
	<h2>Tabel Angsuran Pinjam</h2>
	<table>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Nama Pinjaman</th>
			<th>Pinjaman</th>
			<th>tanggal pinjaman</th>
			<th>Sisa Tenor</th>
			<th>Aksi</th>
		</tr>
		<?php
			$no = 1;
			$sql = mysql_query("SELECT * FROM pinjaman INNER JOIN anggota ON pinjaman.id_anggota=anggota.id_anggota INNER JOIN kategori_pinjaman ON pinjaman.id_kategori=kategori_pinjaman.id_kategori_pinjaman");
			while ($data = mysql_fetch_array($sql)) { ?>
			<tr>
				<td width="5%"><?php echo $no++ ?></td>
				<td width=""><?php echo $data['nama']; ?></td>
				<td width=""><?php echo $data['nama_pinjaman']; ?></td>
				<td width=""><?php echo $data['besar_pinjaman']; ?></td>
				<td><?php echo $data['tanggal_pinjaman']; ?></td>
				<td><?php echo $data['tenor']." Bulan"; ?></td>
				<td width="13%">
					<a href="fungsi/bayar.php?id=<?php echo $data['id_pinjaman']; ?>">
						<button onclick="document.getElementById('bayarbox').style.display='block'">Bayar</button>
					</a>
				</td>
			</tr>	
		<?php } ?>
	</table>
</div>