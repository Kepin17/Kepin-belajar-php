<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include "../config/koneksi.php";
    
    // Generate new barcode ID
    $query = mysqli_query($conn, "SELECT barcode_id FROM barang ORDER BY barcode_id DESC LIMIT 1");
    $data = mysqli_fetch_array($query);
    
    if($data) {
        $lastId = substr($data['barcode_id'], 2);
        $nextId = intval($lastId) + 1;
        $newBarcodeId = 'BR' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
    } else {
        $newBarcodeId = 'BR001';
    }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Tambah Barang Baru</h4>
                    </div>
                    <div class="card-body">
                        <form action="addBarangProses.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="barcode_id" class="form-label">Barcode ID</label>
                                <input type="text" class="form-control" id="barcode_id" name="barcode_id" value="<?php echo $newBarcodeId; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" required>
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