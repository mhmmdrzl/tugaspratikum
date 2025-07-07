const jumlahInput = document.getElementById("jumlah");
const kategoriInput = document.getElementById("kategori");
const totalOutput = document.getElementById("total");

function hitungTotal() {
    const jumlah = parseInt(jumlahInput.value);
    const kategori = kategoriInput.value;
    let hargaPerTiket = kategori === "dewasa" ? 50000 : 25000;
    const total = jumlah * hargaPerTiket;
    totalOutput.value = "Rp" + total.toLocaleString("id-ID");
}

jumlahInput.addEventListener("input", hitungTotal);
kategoriInput.addEventListener("change", hitungTotal);

// Jalankan saat pertama kali
document.addEventListener("DOMContentLoaded", hitungTotal);
