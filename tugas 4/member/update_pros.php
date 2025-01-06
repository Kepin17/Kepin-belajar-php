<?php
include "../config/koneksi.php";

if(isset($_POST['edit'])) {
    $member_id = $_POST['member_id'];
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = $_POST['alamat'];
    $phone = $_POST['phone'];

    $query = mysqli_query($conn, "UPDATE member SET 
        nama = '$nama',
        alamat = '$alamat',
        phone = '$phone'
        WHERE member_id = '$member_id'");

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
