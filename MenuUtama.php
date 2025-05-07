<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Serba Mahal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfdfd;
            color: #333;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #444;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        td {
            padding: 20px;
            width: 300px;
        }

        form h3 {
            text-align: center;
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            margin: 5px 0;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Warung Serba Mahal</h1>
    <table border="1">
        <tr>
            <td>
                <form action="Makanan.php" method="post">
                    <div>
                        <h3>Pesan Makanan</h3>
                        <label>Pilih Makanan:</label><br>
                        <?php
                        $daftarMakanan = [
                            ["nama" => "Nasi Goreng", "harga" => 40000],
                            ["nama" => "Mie Ayam", "harga" => 35000],
                            ["nama" => "Sate Ayam (1 tusuk)", "harga" => 20000],
                            ["nama" => "Es Teh", "harga" => 10000]
                        ];

                        foreach ($daftarMakanan as $menu => $makanan) {
                            echo '<input type="checkbox" id="makanan-' . $menu . '" name="makanan[]" value="' . $menu . '">';
                            echo '<label for="makanan-' . $menu . '">' . $makanan["nama"] . ' (Rp ' . number_format($makanan["harga"], 0, ',', '.') . ')</label><br>';
                        }
                        ?>
                    </div>

                    <div style="text-align: center; margin-top: 15px;">
                        <button type="submit">Pesan Makanan</button>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
