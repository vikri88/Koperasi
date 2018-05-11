<?php if (isset($_SESSION['admin'])): ?>
<div id="dashboard">
	<div class="kotak1">
		<div class="money">
			
		</div>
		<div class="money2">
			<h1>Rp. 146.795.200</h1>
		</div>
		<div class="money3">
			<h3>Tabungan</h3>
		</div>
	</div>
	<div class="kotak1">
		<div class="money" id="pinjamanannn">
			
		</div>
		<div class="money2">
			<h1>Rp. 1.340.500</h1>
		</div>
		<div class="money3">
			<h3>Dipinjam</h3>
		</div>
	</div>
	<div class="kotak1">
		<div class="money" id="angsurannnn">
			
		</div>
		<div class="money2">
			<h1>Rp. 18.570.300</h1>
		</div>
		<div class="money3">
			<h3>Angsuran</h3>
		</div>
	</div>
	<div class="kotak2">
		
	</div>
	<div class="kotak3">
		
	</div>
	<div class="kotak4">
		
	</div>
<?php elseif (isset($_SESSION['anggota'])): ?>
	<div class="kotak3">
		
	</div>
	<div class="kotak4">
		
	</div>	
<?php else: ?>
	<div class="kotak1">
		
	</div>
	<div class="kotak1">
		
	</div>
	<div class="kotak1">
		
	</div>
<?php endif ?>
 <div class="register-container">
      <input type="text" placeholder="Masukan Username" name="username" required>
      <input type="password" placeholder="Masukan Password" name="text" required>
        
      <button type="submit">Login</button>
    </div>
</div>
	