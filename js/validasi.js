function Alphabet(nilai, pesan) {
    var alphaExp = /^[a-zA-Z]+$/;
    if(nilai.value.match(alphaExp)) {
        return true;
    }
    else {
        alert(pesan);
        nilai.focus();
        return false;
    }
}

function Number(nilai, pesan) {
    var numberExp = /^[0-9]+$/;
    if(nilai.value.match(numberExp)) {
        return true;
    }
    else {
        alert(pesan);
        nilai.focus();
        return false;
    }
}
function validasi() {
    Alphabet(document.getElementById('nama'), 'belegug');
    Alphabet(document.getElementById('nama_panjang'), 'tolol');
    Number(document.getElementById('telepon'), 'belegug level 2');
    Number(document.getElementById('simpan'), 'tolol');
}