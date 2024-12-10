<?php 
    
    include "../config/koneksi.php";
     
    $barcode_id = $_POST['barcode_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    
    $quer = mysqli_query($conn, "INSERT INTO barang VALUES ('$barcode_id', $price,'$product_name', $stock)");
    
    if ($quer) {
        echo "<script>alert('Data Berhasil Ditambahkan'); window.location = 'index.php';</script>";
    }
    
?>