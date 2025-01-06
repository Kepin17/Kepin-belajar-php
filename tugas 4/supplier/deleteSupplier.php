<?php 
    include "../config/koneksi.php";
     
    $getId = $_GET['id']; 

    $query = mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = '$getId'");
    
    if ($query) {
        echo "<script>alert('Data Berhasil Dihapus'); window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal Menghapus Data'); window.location = 'index.php';</script>";
    }
?>