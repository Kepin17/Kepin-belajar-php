<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .low-stock {
            background-color: #ffa500 !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Barang</h2>
            <a href="addBarang.php" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Tambah Barang
            </a>
        </div>
        <div class="mb-3">
            <input type="text" id="searchBar" class="form-control" placeholder="Search by product name..." onkeyup="filterTable()">
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Barcode ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                function formatRupiah($number) {
                    return 'Rp ' . number_format($number, 0, ',', '.');
                }
                include "../config/koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM barang");
                while ($data = mysqli_fetch_array($query)) {
                    $stockClass = $data['stock'] <= 10 ? 'low-stock' : '';
                  ?>
                  <tr class="<?php echo $stockClass; ?>">
                    <td><?php echo $data['barcode_id']; ?></td>
                    <td><?php echo $data['product_name']; ?></td>
                    <td><?php echo formatRupiah($data['price']); ?></td>
                    <td><?php echo $data['stock']; ?></td>
                  </tr>
                  <?php
                 }
                  ?>
            </tbody>
        </table>
    </div>
    <script>
        function filterTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchBar");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");
            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>