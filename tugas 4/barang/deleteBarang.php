<?php 
    include "../config/koneksi.php";
     
    $barcode_id = $_GET['id']; 

    $query = mysqli_query($conn, "DELETE FROM barang WHERE barcode_id = '$barcode_id'");
    
    if ($query) {
        echo "<script>alert('Data Berhasil Dihapus'); window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal Menghapus Data'); window.location = 'index.php';</script>";
    }
?>