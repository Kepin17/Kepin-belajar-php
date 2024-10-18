<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nilai = $_POST['nilai'];

    // Validasi apakah nilai valid
    if (is_numeric($nilai)) {
        if ($nilai >= 80 && $nilai <= 100) {
            $status = "A";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $status = "B";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $status = "C";
        } elseif ($nilai >= 50 && $nilai <= 59) {
            $status = "D";
        } elseif ($nilai >= 0 && $nilai < 50) {
            $status = "E";
        } else {
            $status = "Angka Tidak Valid";
        }
    } else {
        $status = "Angka Tidak Valid";
    }
    
    // Tampilkan hasil
    echo "<h2>Hasil Nilai Akademik</h2>";
    echo "NIM: " . $nim . "<br>";
    echo "Nama: " . $nama . "<br>";
    echo "Jurusan: " . $jurusan . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Status: " . $status . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Akademik</title>
</head>
<body>
    <h2>Form Input Nilai Akademik</h2>
    <form method="post" action="">
        NIM: <input type="text" name="nim" required><br><br>
        Nama: <input type="text" name="nama" required><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>
        Nilai: <input type="number" name="nilai" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
