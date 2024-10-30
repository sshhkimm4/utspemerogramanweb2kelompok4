<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Produk</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-spacing: 0; /* Remove borders between cells */
        }
        th, td {
            padding: 8px;
            text-align: left; /* Align text to the left */
        }
        th {
            background-color: #f2f2f2;
            border-bottom: 2px solid #000; /* Add a bottom border for header */
        }
        tr:not(:last-child) td {
            border-bottom: 1px solid #000; /* Add a bottom border for table rows except the last */
        }
        .header, .total {
            font-weight: bold;
        }
        .content {
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div class="content">
        <p><strong>Tanggal Transaksi</strong>: 30 Oktober 2024</p>

        <?php
        // Array produk dengan nama produk, stok, dan harga
        $products = [
            ["nama" => "Diapers", "stok" =>10, "harga" => 51880],
            ["nama" => "Baju bayi", "stok" => 17, "harga" => 35500],
            ["nama" => "Minyak telon", "stok" => 12, "harga" => 31790],
            ["nama" => "Bedak", "stok" => 4, "harga" => 16980],
            ["nama" => "Shampo", "stok" => 7, "harga" => 20670]
        ];

        // Menghitung total harga
        $total = 0;
        foreach ($products as $product) {
            $total += $product["stok"] * $product["harga"];
        }

        // Diskon (misalnya 10%)
        $diskon = 0.2 * $total;
        $totalPembayaran = $total - $diskon;
        ?>

        <table>
            <tr>
                <th>Produk</th>
                <th>Jumlah (Stok x Harga)</th>
            </tr>

            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product["nama"] . " (" . $product["stok"] . " x Rp " . number_format($product["harga"], 0, ',', '.') . ")"; ?></td>
                <td>Rp <?php echo number_format($product["stok"] * $product["harga"], 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>

            <tr class="total">
                <td>Total</td>
                <td>Rp <?php echo number_format($total, 0, ',', '.'); ?></td>
            </tr>
            <tr class="total">
                <td>Diskon</td>
                <td>Rp <?php echo number_format($diskon, 0, ',', '.'); ?></td>
            </tr>
            <tr class="total">
                <td>Total Pembayaran</td>
                <td>Rp <?php echo number_format($totalPembayaran, 0, ',', '.'); ?></td>
            </tr>
        </table>
    </div>

</body>
</html>