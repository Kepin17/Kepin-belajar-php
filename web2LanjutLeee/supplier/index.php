<?php
include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Supplier</h2>
            <a href="addSupplier.php" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Tambah Supplier
            </a>
        </div>
        <div class="mb-3">
            <input type="text" id="searchBar" class="form-control" placeholder="Search supplier name..." onkeyup="filterTable()">
        </div>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Supplier ID</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = mysqli_query($conn, "SELECT * FROM supplier");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $data['id_supplier']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td>
                        <a href="editSupplier.php?id=<?php echo $data['id_supplier']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="deleteSupplier.php?id=<?php echo $data['id_supplier']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchBar");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");
            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Search by supplier name
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
</body>
</html>
