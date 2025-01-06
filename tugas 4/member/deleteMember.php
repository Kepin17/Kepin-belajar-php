<?php 
    include "../config/koneksi.php";
     
    $memberId = $_GET['id']; 

    $query = mysqli_query($conn, "DELETE FROM member WHERE member_ID = '$memberId'");
    
    if ($query) {
        echo "<script>alert('Data Berhasil Dihapus'); window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal Menghapus Data'); window.location = 'index.php';</script>";
    }
?>