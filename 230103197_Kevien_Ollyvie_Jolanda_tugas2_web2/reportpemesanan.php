<?php

$nomor_urut = $_GET["nomor_urut"];
$name = $_GET["name"];
$kota_tujuan = $_GET["kota_tujuan"];
$jenis_ka = $_GET["jenis_ka"];
$ismakan = $_GET["ismakan"];
$tarif_makan = 15000;

$tarif_makan = 15000;
$diskon = 0;

if($jenis_ka == "Ekonomi") {
  $tarif_jenis_ka = 50000;
} else if($jenis_ka == "Eksekutif") {
  $tarif_jenis_ka = 275000;
} else {
  echo "Jenis KA tidak valid.";
  exit;
}

if($ismakan == "Ya") {
  $sub_total = $tarif_jenis_ka + $tarif_makan;
  
  if($jenis_ka == "Eksekutif") {
    $diskon = $sub_total * 0.1;
  }
} else if($ismakan == "Tidak") {
  $sub_total = $tarif_jenis_ka;
  $tarif_makan = 0;
} else {
  echo "Pilihan layanan makan tidak valid.";
  exit;
}

function formatRupiah($angka) {
  return "Rp " . number_format($angka, 0, ',', '.');
}

$grand_total = $sub_total - $diskon;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        },
        fontFamily: {
          roboto: ["Roboto", "sans-serif"],
        },
      }
    }
</script>
<body >
  <main class="h-screen flex justify-center items-center">
    <div class="laporan-wrapper w-3/4 h-3/4 mx-auto border-2 p-10 rounded-lg bg-slate-800 shadow-xl">
      <div class="laporan-header text-center text-orange-500 font-roboto">
        <h1 class="text-2xl font-bold">PT Kereta Api Indonesia</h1>
        <h1 class="text-2xl font-bold">Laporan Pemesanan Tiket</h1>
      </div>
      <div class="laporan-body w-full h-full flex my-5">
        <div class="left-textbox w-full h-full font-roboto text-slate-100">
          <ul>
            <li>Nomor Urut</li>
            <li>Nama</li>
            <li>Kota Tujuan</li>
            <li>Tarif jenis KA</li>
            <li>Tarif layanan makan</li>
          </ul>
          <hr class="h-2 bg-slate-100 my-3 border-none rounded-tl-md rounded-bl-md">
          <ul>
            <li>Sub total</li>
            <li>Diskon</li>
          </ul>
          
          <hr class="h-2 bg-slate-100 my-3 border-none rounded-tl-md rounded-bl-md">

          <h3>Grand Total</h3>
          <a href="pemesanan.php" >
            <button class="w-32 h-9 bg-orange-600 text-slate-100 rounded my-5 font-roboto font-bold">
              Input lagi
            </button>
          </a>
        
        </div>
        <div class="right-textbox w-full h-full font-roboto text-slate-100">
          <ul>
            <li>: <?= $nomor_urut ?></li></li>
            <li>: <?= $name ?></li></li>
            <li>: <?= $kota_tujuan ?></li></li>
            <li>: <?= formatRupiah($tarif_jenis_ka) ?></li></li>
            <li>: <?= formatRupiah($tarif_makan) ?></li></li>
          </ul>
          <hr class="h-2 bg-slate-100 my-3 border-none rounded-tr-md rounded-br-md">
          <ul>
            <li>: <?= formatRupiah($sub_total) ?></li></li>
            <li>: <?= formatRupiah($diskon) ?></li></li>
          </ul>         

          <hr class="h-2 bg-slate-100 my-3 border-none rounded-tr-md rounded-br-md">
          <h3>: <?= formatRupiah($grand_total) ?></h3>
        </div>
      </div>
    </div>
  </main>
</body>
</html>


