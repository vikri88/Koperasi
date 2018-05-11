<script>
var register = document.getElementById('registerbox');

window.onclick = function(event){
	if (event.target == register) {
		register.style.display = "none";
	}
}
var login = document.getElementById('loginbox');

window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}
var edit = document.getElementById('editbox');

window.onclick = function(event) {
    if (event.target == edit) {
        edit.style.display = "none";
    }
}
var simpan = document.getElementById('simpanbox');

window.onclick = function(event) {
    if (event.target == simpan) {
        simpan.style.display = "none";
    }
}
var pinjam = document.getElementById('pinjambox');

window.onclick = function(event) {
    if (event.target == pinjam) {
        pinjam.style.display = "none";
    }
}
var bayar = document.getElementById('bayarbox');

window.onclick = function(event) {
    if (event.target == bayar) {
        bayar.style.display = "none";
    }
}
var ambil = document.getElementById('ambilbox');

window.onclick = function(event) {
    if (event.target == ambil) {
        ambil.style.display = "none";
    }
}
</script>