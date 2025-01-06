<?php
include "../config/koneksi.php";
$title = "Print Barang";

$barangquer = mysqli_query($conn, "SELECT * FROM barang ");
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container mx-auto p-8">
        <div class="non-printable mb-4">
            <button onclick="window.print()" 
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
                <i class="fa-solid fa-print mr-2"></i>Print
            </button>
            <button onclick="window.close()" 
                    class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300 ml-2">
                <i class="fa-solid fa-times mr-2"></i>Close
            </button>
        </div>

        <div class="printable">
            <h3 class="text-2xl font-bold text-center mb-6">Detail Barang</h3>
            <table class="min-w-full border">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 border">No.</th>
                        <th class="py-3 px-4 border">Nama Barang</th>
                        <th class="py-3 px-4 border">Harga</th>
                        <th class="py-3 px-4 border">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1; 
                    foreach($barangquer as $row) : 
                    ?>
                    <tr>
                        <td class="py-3 px-4 border"><?= $i++; ?></td>
                        <td class="py-3 px-4 border"><?= $row["product_name"]; ?></td>
                        <td class="py-3 px-4 border">Rp. <?= number_format($row["price"], 0, ',', '.'); ?></td>
                        <td class="py-3 px-4 border"><?= $row["stock"]; ?> pcs</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <style>
        @media print {
            .non-printable {
                display: none !important;
            }
            body {
                padding: 1rem;
            }
            .printable {
                margin: 0;
                padding: 0;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }
        }
    </style>
</body>
</html>
