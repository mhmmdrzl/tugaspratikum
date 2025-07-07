document.addEventListener("DOMContentLoaded", () => {
  const jumlah = document.getElementById("jumlah");
  const kategori = document.getElementById("kategori");
  const total = document.getElementById("total");

  function hitungTotal() {
    const jumlahTiket = parseInt(jumlah.value);
    const harga = kategori.value === "dewasa" ? 50000 : 25000;
    total.value = "Rp" + (jumlahTiket * harga).toLocaleString("id-ID");
  }

  jumlah.addEventListener("input", hitungTotal);
  kategori.addEventListener("change", hitungTotal);

  // Hitung otomatis saat halaman dimuat
  hitungTotal();
});
