<?php
include "../config/koneksi.php";

if(isset($_POST['edit'])) {
    $idSup = $_POST['id_supplier'];
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = $_POST['alamat'];
    $phone = $_POST['phone'];

    $query = mysqli_query($conn, "UPDATE supplier SET 
        nama = '$nama',
        alamat = '$alamat',
        phone = '$phone'
        WHERE id_supplier = '$idSup'");

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
