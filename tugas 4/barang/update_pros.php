<?php
include "../config/koneksi.php";

if(isset($_POST['edit'])) {
    $barcode_id = $_POST['barcode_id'];
    $product_name = htmlspecialchars($_POST['product_name']);
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    // Validate inputs
    if(empty($product_name) || empty($price) || empty($stock)) {
        echo "<script>
            alert('Semua field harus diisi!');
            window.location = 'editBarang.php?id=".$barcode_id."';
        </script>";
        exit;
    }

    if($price < 0 || $stock < 0) {
        echo "<script>
            alert('Harga dan stok tidak boleh negatif!');
            window.location = 'editBarang.php?id=".$barcode_id."';
        </script>";
        exit;
    }

    $query = mysqli_query($conn, "UPDATE barang SET 
        product_name = '$product_name',
        price = '$price',
        stock = '$stock'
        WHERE barcode_id = '$barcode_id'");

    if($query) {
        echo "<script>
            alert('Data berhasil diupdate!');
            window.location = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal mengupdate data: " . mysqli_error($conn) . "');
            window.location = 'editBarang.php?id=".$barcode_id."';
        </script>";
    }
} else {
    header("Location: index.php");
}
?>
