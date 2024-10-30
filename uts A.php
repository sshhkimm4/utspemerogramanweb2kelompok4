<!DOCTYPE html>
<html>
<head>
    <title>Toko Perlengkapan Bayi</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px 10px;
        }
        .nota {
            width: 300px;
            padding: 10px;
            border: 1px solid black;
            
        }
        
        .total-section {
            margin-top: 10px;
            border-top: 1px solid black;
            padding-top: 10px;
        }
        .grand-total {
            font-weight: bold;
            border-top: double black;
            padding-top: 5px;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<?php
// Deklarasi variabel produk
$prod1_nama = "Minyak Telon";
$prod1_stok = 20;
$prod1_harga = 31790;

$prod2_nama = "Diapers";
$prod2_stok = 25;
$prod2_harga = 51880;

$prod3_nama = "Baby Oil";
$prod3_stok = 15;
$prod3_harga = 16780;

$prod4_nama = "Shampo Baby";
$prod4_stok = 20;
$prod4_harga = 20670;

$prod5_nama = "Bedak";
$prod5_stok = 15;
$prod5_harga = 16980;

$prod6_nama = "Baju Bayi";
$prod6_stok = 20;
$prod6_harga = 35500;

$prod7_nama = "Jumper";
$prod7_stok = 25;
$prod7_harga = 52999;

// Menghitung jumlah per produk
$prod1_jumlah = $prod1_stok * $prod1_harga;
$prod2_jumlah = $prod2_stok * $prod2_harga;
$prod3_jumlah = $prod3_stok * $prod3_harga;
$prod4_jumlah = $prod4_stok * $prod4_harga;
$prod5_jumlah = $prod5_stok * $prod5_harga;
$prod6_jumlah = $prod6_stok * $prod6_harga;
$prod7_jumlah = $prod7_stok * $prod7_harga;

// Menghitung total keseluruhan
$total_keseluruhan = $prod1_jumlah + $prod2_jumlah + $prod3_jumlah + 
                     $prod4_jumlah + $prod5_jumlah + $prod6_jumlah + $prod7_jumlah;

// Menampilkan tabel barang
echo "<h2>Tabel Harga Barang</h2>";
echo "<table>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

echo "<tr>";
echo "<td>1</td>";
echo "<td>$prod1_nama</td>";
echo "<td>$prod1_stok</td>";
echo "<td>Rp " . number_format($prod1_harga, 0, ',', '.') . "</td>";
echo "<td>Rp " . number_format($prod1_jumlah, 0, ',', '.') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>2</td>";
echo "<td>$prod2_nama</td>";
echo "<td>$prod2_stok</td>";
echo "<td>Rp " . number_format($prod2_harga, 0, ',', '.') . "</td>";
echo "<td>Rp " . number_format($prod2_jumlah, 0, ',', '.') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>3</td>";
echo "<td>$prod3_nama</td>";
echo "<td>$prod3_stok</td>";
echo "<td>Rp " . number_format($prod3_harga, 0, ',', '.') . "</td>";
echo "<td>Rp " . number_format($prod3_jumlah, 0, ',', '.') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>4</td>";
echo "<td>$prod4_nama</td>";
echo "<td>$prod4_stok</td>";
echo "<td>Rp " . number_format($prod4_harga, 0, ',', '.') . "</td>";
echo "<td>Rp " . number_format($prod4_jumlah, 0, ',', '.') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>5</td>";
echo "<td>$prod5_nama</td>";
echo "<td>$prod5_stok</td>";
echo "<td>Rp " . number_format($prod5_harga, 0, ',', '.') . "</td>";
echo "<td>Rp " . number_format($prod5_jumlah, 0, ',', '.') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>6</td>";
echo "<td>$prod6_nama</td>";
echo "<td>$prod6_stok</td>";
echo "<td>Rp " . number_format($prod6_harga, 0, ',', '.') . "</td>";
echo "<td>Rp " . number_format($prod6_jumlah, 0, ',', '.') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>7</td>";
echo "<td>$prod7_nama</td>";
echo "<td>$prod7_stok</td>";
echo "<td>Rp " . number_format($prod7_harga, 0, ',', '.') . "</td>";
echo "<td>Rp " . number_format($prod7_jumlah, 0, ',', '.') . "</td>";
echo "</tr>";

echo "<tr><td colspan='4'><strong>Total Keseluruhan</strong></td>";
echo "<td><strong>Rp " . number_format($total_keseluruhan, 0, ',', '.') . "</strong></td></tr>";
echo "</table>";

// NOTA TRANSAKSI
echo "<div class='nota'>";
echo "<h3>Nota Transaksi</h3>";
echo "Tanggal Transaksi : 30 Oktober 2024<br><br>";

// Diapers
$trans1_qty = 10;
$trans1_total = $trans1_qty * $prod2_harga;
echo "Diapers ($trans1_qty x " . number_format($prod2_harga, 0, ',', '.') . ")<tr>";
echo "   : Rp " . number_format($trans1_total, 0, ',', '.') . "<br><br>";

// Baju Bayi
$trans2_qty = 17;
$trans2_total = $trans2_qty * $prod6_harga;
echo "Baju Bayi ($trans2_qty x " . number_format($prod6_harga, 0, ',', '.') . ")<tr>";
echo "   : Rp " . number_format($trans2_total, 0, ',', '.') . "<br><br>";

// Minyak Telon
$trans3_qty = 12;
$trans3_total = $trans3_qty * $prod1_harga;
echo "Minyak Telon ($trans3_qty x " . number_format($prod1_harga, 0, ',', '.') . ")<tr>";
echo "   : Rp " . number_format($trans3_total, 0, ',', '.') . "<br><br>";

// Bedak
$trans4_qty = 4;
$trans4_total = $trans4_qty * $prod5_harga;
echo "Bedak ($trans4_qty x " . number_format($prod5_harga, 0, ',', '.') . ")<tr>";
echo "   : Rp " . number_format($trans4_total, 0, ',', '.') . "<br><br>";

// Shampo Baby
$trans5_qty = 7;
$trans5_total = $trans5_qty * $prod4_harga;
echo "Shampo Baby ($trans5_qty x " . number_format($prod4_harga, 0, ',', '.') . ")<tr>";
echo "   : Rp " . number_format($trans5_total, 0, ',', '.') . "<br><br>";

// Perhitungan total dan diskon
$total_pembelian = $trans1_total + $trans2_total + $trans3_total + $trans4_total + $trans5_total;

// Menentukan diskon
$diskon = 0;
$diskon_persen = 0;
if ($total_pembelian >= 350000) {
    $diskon = $total_pembelian * 0.20;
    $diskon_persen = 20;
} elseif ($total_pembelian >= 200000) {
    $diskon = $total_pembelian * 0.15;
    $diskon_persen = 15;
}

$total_pembayaran = $total_pembelian - $diskon;

// Menampilkan ringkasan pembayaran
echo "<div class='total-section'>";
echo "Subtotal: Rp " . number_format($total_pembelian, 0, ',', '.') . "<br>";
if ($diskon > 0) {
    echo "Diskon ($diskon_persen%): Rp " . number_format($diskon, 0, ',', '.') . "<br>";
}
echo "<div class='grand-total'>";
echo "Total Pembayaran: Rp " . number_format($total_pembayaran, 0, ',', '.') . "</div>";
echo "</div>";

echo "</div>";
echo"</br>";
echo "kelompok 4"."</br>";
echo "syukril" . "</br>";
echo "zafira" . "</br>";
echo "iqbal" . "</br>";
?>



</body>
</html>