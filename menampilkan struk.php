<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 300px;
            margin: auto;
            border: 1px solid #000;
            padding: 10px;
            line-height: 1.5;
        }
        .center {
            text-align: center;
        }
        .label {
            font-weight: bold;
        }
        .total {
            font-weight: bold;
            border-top: 1px solid #000;
            padding-top: 5px;
        }
    </style>
</head>
<body>
    <?php
    // Sample data
    $date = date("30 Oktober 2024");
    $items = [
        "Diapers" => ["qty" => 10, "price" => 51880],
        "Baju Bayi" => ["qty" => 17, "price" => 35500],
        "Minyak Telon" => ["qty" => 12, "price" => 31790],
        "Bedak" => ["qty" => 4, "price" => 16980],
        "Shampo" => ["qty" => 7, "price" => 20670],
    ];
    $discount = 0.2; // 20% discount

    // Calculate total
    $total = 0;
    foreach ($items as $item) {
        $total += $item["qty"] * $item["price"];
    }
    $totalDiscount = $total * $discount;
    $totalPayment = $total - $totalDiscount;
    ?>

    <div class="center">
        <h3>Struk Pembelian</h3>
        <p>Tanggal Transaksi: <?php echo $date; ?></p>
        <hr>
    </div>

    <?php foreach ($items as $name => $item) : ?>
        <p>
            <?php echo $name; ?> (<?php echo $item["qty"]; ?> X Rp <?php echo number_format($item["price"], 0, ',', '.'); ?>) <br>
            <span class="label">Subtotal</span>: Rp <?php echo number_format($item["qty"] * $item["price"], 0, ',', '.'); ?>
        </p>
    <?php endforeach; ?>

    <hr>
    <p class="total">Total: Rp <?php echo number_format($total, 0, ',', '.'); ?></p>
    <p class="label">Diskon: <?php echo $discount * 100; ?>%</p>
    <p class="total">Total Pembayaran: Rp <?php echo number_format($totalPayment, 0, ',', '.'); ?></p>
    <hr>
    <div class="center">
        <p>Terima Kasih atas Pembelian Anda!</p>
    </div>
</body>
</html>
