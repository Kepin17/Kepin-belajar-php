<?php
include "../config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $supplier_id = $_POST['supplier_id'];
    $nama_supplier = $_POST['name'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['phone'];

    // Basic validation
    if (empty($supplier_id) || empty($nama_supplier) || empty($alamat) || empty($telepon) ) {
        echo "<script>
                alert('Semua field harus diisi!');
                window.location.href='addSupplier.php';
              </script>";
        exit();
    }


    // Check if supplier_id already exists
    $check_query = "SELECT id_supplier FROM supplier WHERE id_supplier = '$supplier_id'";
    $result = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<script>
                alert('Supplier ID sudah ada!');
                window.location.href='addSupplier.php';
              </script>";
        exit();
    }

    // Insert data into database
    $query = "INSERT INTO supplier VALUES ('$supplier_id', '$nama_supplier', '$alamat', '$telepon')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data supplier berhasil ditambahkan!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . mysqli_error($conn) . "');
                window.location.href='addSupplier.php';
              </script>";
    }
} else {
    // If not POST request, redirect to add form
    header("Location: addSupplier.php");
    exit();
}

mysqli_close($conn);
?>
