<div class="sisi">
	<?php 
		if (isset($_SESSION['admin'])) { ?>
				<div class="s2" id="dsbrd">
					<div class="photo"></div>
					Dashboard
				</div>
				<div class="s2" onclick="document.getElementById('registerbox').style.display='block'">
					<div class="photo" id="register"></div>
					Register
				</div>
				<div class="s2" id="user">
					<div class="photo" id="handshake"></div>
					Users And Members
				</div>
					<div class="s22" id="datamember">
						<div class="photo" id="useria"></div>
						Data Member
					</div>
				<div class="s2" id="transaksi">
					<div class="photo" id="wallet"></div>
					Transaksi
				</div>
						<div class="s22" id="simpan" onclick="document.getElementById('simpanbox').style.display='block'">
							<div class="photo" id="simpantabungan"></div>
							Simpan
						</div>
						<div class="s22" id="pinjam">
							<div class="photo" id="pinjam2"></div>
							Pinjam
						</div>
						<div class="s22" id="angsuran">
							<div class="photo" id="angsuran2"></div>
							Angsuran
						</div>
				<div class="s2" id="report">
					<div class="photo" id="reportan"></div>
					Report
				</div>
					<a href="">
						<div class="s22" id="rsimpan">
							<div class="photo" id="simpankoin"></div>
							Simpan
						</div>
					</a>
					<a href="">
						<div class="s22" id="rpinjam">
							<div class="photo" id="pinjaman"></div>
							Pinjam
						</div>
					</a>
					<a href="">
						<div class="s22" id="rangsuran">
							<div class="photo" id="angsuranan"></div>
							Angsuran
						</div>
					</a>
	<?php } elseif (isset($_SESSION['anggota'])) { ?>
			<a href="">
				<div class="s2">
					<div class="photo"></div>
					Dashboard
				</div>
			</a>
			<a href="">
				<div class="s2">
					<div class="photo" id="profile"></div>
					My Profile
				</div>
			</a>
				<div class="s2" id="transaksi">
					<div class="photo" id="wallet"></div>
					Uang Anda
				</div>
						<div class="s22" id="simpan">
							<div class="photo" id="simpankoin"></div>
							Ambil Simpananan
						</div>
						<div class="s22" id="pinjam" onclick="document.getElementById('pinjambox').style.display='block'">
							<div class="photo" id="pinjaman"></div>
							Pinjam
						</div>
					<a href="">
						<div class="s22" id="angsuran">
							<div class="photo" id="angsuranan"></div>
							Angsuran
						</div>
					</a>
	<?php } else { ?>
			<a href="">
				<div class="s2">
					<div class="photo" id="kontak"></div>
					Kontak
				</div>
			</a>
				<div class="s2" onclick="document.getElementById('loginbox').style.display='block'">
					<div class="photo" id="login"></div>
					Login
				</div>
	<?php } ?>
</div>
