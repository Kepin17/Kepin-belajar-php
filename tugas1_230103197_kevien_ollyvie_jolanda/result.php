<?php
$getNim = $_POST['nim'];
$getName = $_POST['name'];
$getMajor = $_POST['major'];
$getScore = $_POST['score'];

if($getScore >= 80 && $getScore <= 100) {
  $getStatus = "A";
}else if($getScore >= 70 && $getScore <= 79) {
  $getStatus = "B";
}else if($getScore >= 60 && $getScore <= 69) {
  $getStatus = "C";
}else if($getScore >= 50 && $getScore <= 59) {
  $getStatus = "D";
}else if($getScore >= 0 && $getScore < 50) {
  $getStatus = "E";
}else {
  $getStatus = "echo <script>
  alert('Angka Tidak Valid');
  location.href = 'index.html'
  </script>";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }
  </style>
  <body class="h-screen bg-slate-900">
    <nav class="bg-slate-800 h-14 p-7 flex items-center gap-3">
      <img src="./img/logo.png" alt="logo" width="35" />
      <h1 class="text-slate-100 font-bold text-xl">Olyzano University</h1>
    </nav>
    <div class="page flex items-center gap-1 text-slate-400 mt-5 px-10">
      <a href="#">Academic Dashboard</a>
      <p>/</p>
      <p class="text-slate-100">Academic Table</p>
    </div>
    <div class="page flex items-center gap-1 text-slate-100 mt-5 px-10">
    <table class="table-auto w-full rounded-md overflow-hidden">
      <thead class="w-full h-10 bg-orange-500 ">
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Nilai</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-slate-100 text-slate-900 h-10 text-center">
          <td class="p-2 border-2"><?= $getNim ?></td>
          <td class="p-2 border-2"><?= $getName ?></td>
          <td class="p-2 border-2"><?= $getMajor ?></td>
          <td class="p-2 border-2"><?= $getScore ?></td>
          <td class="p-2 border-2"><?= $getStatus ?></td>
        </tr>
        
      </tbody>
    </table>
    </div>
    <footer>
      <p class="text-slate-400 text-center mt-10">Copyright © 2023 Olyzano University</p>
    </footer>
  </body>
</html>
