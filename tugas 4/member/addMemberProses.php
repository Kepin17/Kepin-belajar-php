<?php
include "../config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $member_id = $_POST['member_id'];
    $member_name = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['phone'];

    // Basic validation
    if (empty($member_id) || empty($member_name) || empty($alamat) || empty($telepon) ) {
        echo "<script>
                alert('Semua field harus diisi!');
                window.location.href='index.php';
              </script>";
        exit();
    }


    $check_query = "SELECT member_id FROM member WHERE member_id = '$member_id'";
    $result = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<script>
                alert('Member ID sudah ada!');
                window.location.href='index.php';
              </script>";
        exit();
    }

    // Insert data into database
    $query = "INSERT INTO member VALUES ('$member_id', '$member_name', '$alamat', '$telepon')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data member berhasil ditambahkan!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . mysqli_error($conn) . "');
                window.location.href='index.php';
              </script>";
    }
} else {
    // If not POST request, redirect to add form
    header("Location: index.php");
    exit();
}

mysqli_close($conn);
?>
