<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<style>
  input:focus {
    outline: none;
  }

  input[type=number]::-webkit-outer-spin-button,
  input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type=number] {
    -moz-appearance: textfield;
  }
</style>

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
        screens: {
        'desktop': '678px',
        },
      }
    }
  </script>
<body>

  <div class="form-wrapper h-screen w-full mx-auto flex items-center justify-center border-2">
    <form class="h-3/4 w-3/4 bg-slate-800 rounded-lg" action="reportpemesanan.php" method="GET">
     
    <div class="form-header text-center font-roboto my-5 text-orange-500">
        <h1 class="text-2xl font-bold">Pemesanan Tiket Online</h1>
        <h1 class="text-2xl font-bold">PT Kereta Api Indonesia</h1>
      </div>

      <div class="form-body w-full  p-5 flex flex-col gap-5">

        <div class="form-group flex gap-5 items-center">
          <label for="nomor_urut" class="font-bold text-lg w-44 text-slate-100">No. Urut</label>
          <input type="number" id="nomor_urut" name="nomor_urut" placeholder="Masukkan nomor urut" required
          class="w-full h-10 border-2 p-2 rounded-md"
          >
        </div>
        
        <div class="form-group flex gap-5 items-center">
          <label for="name" class="font-bold text-lg w-44 text-slate-100">Nama</label>
          <input type="text" id="name" name="name" placeholder="Masukkan nama pelanggan" required
          class="w-full h-10 border-2 p-2 rounded-md"
          >
        </div>
        
        <div class="form-group flex gap-5 items-center">
          <label for="kota_tujuan" class="font-bold text-lg w-44 text-slate-100">Kota Tujuan</label>
          <input type="text" id="kota_tujuan" name="kota_tujuan" placeholder="Masukkan kota tujuan pelanggan" required
          class="w-full h-10 border-2 p-2 rounded-md"
          >
        </div>

        <div class="form-group flex gap-5 items-center">
          <label for="tarif_jenis_ka" class="font-bold text-lg w-44 text-slate-100">Jenis KA</label>
       
          <select name="jenis_ka" id="jenis_ka" class="w-full h-10 border-2 p-2 rounded-md">
            <option value="Ekonomi">Ekonomi</option>
            <option value="Eksekutif">Eksekutif</option>
          </select>
        </div>

        <div class="form-group flex gap-5 items-center">
          <label for="ismakan" class="font-bold text-lg w-44 text-slate-100">Layanan Makan</label>
       
          <select name="ismakan" id="ismakan" class="w-full h-10 border-2 p-2 rounded-md">
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>

      <div class="form-footer flex items-center justify-content-center gap-10 px-10 desktop:px-[11.8rem]">
        <button type="submit" class="w-32 h-10 bg-green-500 text-white rounded-md my-4 cursor-pointer font-roboto font-bold">Submit</button>
        <button type="reset" class="w-32 h-10 bg-sky-500 text-white rounded-md my-4 cursor-pointer font-roboto font-bold">Reset</button>
      </div>
    </form>
  </div>
</body>
</html>