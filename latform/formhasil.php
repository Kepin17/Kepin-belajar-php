<?php
$nama = $_POST['name'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$jenjang = $_POST['jenjang'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col" colspan="2">Biodata Olyzano University</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nama</td>
      <td><?= $nama ?></td>
    </tr>
   
    <tr>
      <td>NIM</td>
      <td><?= $nim ?></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td><?= $jurusan ?></td>
    </tr>
   
    <tr>
      <td>Jenjang</td>
      <td><?= $jenjang ?></td>
    </tr>
   
    <tr>
      <td>Kelas</td>
      <td><?= $kelas ?></td>
    </tr>
   
    <tr>
      <td>Semester</td>
      <td><?= $semester ?></td>
    </tr>
   
  </tbody>
</table>
</body>
</html>