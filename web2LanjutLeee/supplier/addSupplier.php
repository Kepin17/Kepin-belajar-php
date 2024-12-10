<?php
include "../config/koneksi.php";

// Generate new supplier ID
$query = mysqli_query($conn, "SELECT id_supplier FROM supplier ORDER BY id_supplier DESC LIMIT 1");
$data = mysqli_fetch_array($query);

if($data) {
    $lastId = substr($data['id_supplier'], 2);
    $nextId = intval($lastId) + 1;
    $newSupplierId = 'SP' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
} else {
    $newSupplierId = 'SP001';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Tambah Supplier Baru</h4>
                    </div>
                    <div class="card-body">
                        <form action="addSupplierProses.php" method="post">
                            <div class="mb-3">
                                <label for="supplier_id" class="form-label">Supplier ID</label>
                                <input type="text" class="form-control" id="supplier_id" name="supplier_id" value="<?php echo $newSupplierId; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Supplier</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">No. Telepon</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="index.php" class="btn btn-secondary me-md-2">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
