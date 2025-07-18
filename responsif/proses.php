<?php
function hitungHarga($kategori, $jumlah) {
    if ($kategori == "dewasa") {
        return 50000 * $jumlah;
    } else {
        return 25000 * $jumlah;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $jumlah = (int) $_POST['jumlah'];
    $kategori = $_POST['kategori'];
    $total = hitungHarga($kategori, $jumlah);

    $warna = $kategori == "dewasa" ? "#2c3e50" : "#16a085";

    echo "
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ecf0f1;
            padding: 30px;
        }
        .card {
            background: white;
            padding: 25px;
            max-width: 500px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2980b9;
            margin-bottom: 20px;
        }
        .detail {
            font-size: 16px;
            line-height: 1.7;
            color: #333;
        }
        .highlight {
            color: $warna;
            font-weight: bold;
        }
        .back-link {
            text-align: center;
            margin-top: 25px;
        }
        .back-link a {
            text-decoration: none;
            color: white;
            background: #3498db;
            padding: 10px 20px;
            border-radius: 8px;
            display: inline-block;
            transition: background 0.3s;
        }
        .back-link a:hover {
            background: #2c80b4;
        }
    </style>

    <div class='card'>
        <h2>Detail Pemesanan Tiket</h2>
        <div class='detail'>
            Nama: <span class='highlight'>$nama</span><br>
            Jumlah Tiket: <span class='highlight'>$jumlah</span><br>
            Kategori: <span class='highlight'>" . ucfirst($kategori) . "</span><br>
            Total Harga: <span class='highlight'>Rp" . number_format($total, 0, ',', '.') . "</span>
        </div>
        <div class='back-link'>
            <a href='index.html'>← Kembali ke Form</a>
        </div>
    </div>";
}
?>
