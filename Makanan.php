<?php

$daftarMakanan = [
    ["nama" => "Nasi Goreng", "harga" => 15000],
    ["nama" => "Mie Ayam", "harga" => 12000],
    ["nama" => "Sate Ayam (5 tusuk)", "harga" => 20000],
    ["nama" => "Es Teh", "harga" => 5000]
];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["makanan"])) {
    $itemDipesan = [];
    $totalHarga = 0;

    foreach ($_POST["makanan"] as $index) {
        if (isset($daftarMakanan[$index])) {
            $item = $daftarMakanan[$index];
            $itemDipesan[] = $item;
            $totalHarga += $item["harga"];
        }
    }

    $pesanan = [
        "items" => $itemDipesan,
        "total_harga" => $totalHarga,
    ];

    if (!empty($pesanan["items"])) {
        echo "<h1 style='font-family: Arial, sans-serif; text-align: center; color: #333;'>Warung Serba Mahal</h1>";
        echo "<table border='1' style='margin: auto; border-collapse: collapse; font-family: Arial, sans-serif;'>";
        echo "<tr><td style='padding: 15px; width: 300px; background-color: #f9f9f9;'>";

        echo "<h3 style='text-align:center; margin-bottom: 10px; color: #444;'>Ringkasan Pesanan</h3>";
        echo "<ul style='list-style-type: none; padding-left: 10px; margin: 0;'>";
        foreach ($pesanan["items"] as $item) {
            echo "<li style='margin-bottom: 5px;'>" . $item["nama"] . " - <strong>Rp " . number_format($item["harga"], 0, ',', '.') . "</strong></li>";
        }
        echo "</ul>";
        echo "<p style='margin-top: 10px; font-weight: bold;'>Total Harga: <span style='color: green;'>Rp " . number_format($pesanan["total_harga"], 0, ',', '.') . "</span></p>";

        echo "</td></tr></table>";
    } else {
        echo "<p style='text-align: center; color: red;'>Tidak ada makanan yang dipilih.</p>";
    }
} else {
    echo "<p style='text-align: center; color: red;'>Terjadi kesalahan dalam pemrosesan form.</p>";
}

?>
