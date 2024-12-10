<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olyzano Shop | <?=$title?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <style >

    th {
      border: 2px solid #ddd;
    }
    td {
      border: 2px solid #ddd;
    }
    </style>
<body>


  

<nav class="w-full h-10 flex items-center px-10 bg-slate-900 text-slate-100">
      <ul class="flex gap-5">
        <li>
          <a href="../member/index.php">Home</a>
        </li>
        <li>
          <a href="../barang/index.php">Items</a>
        </li>
        <li>
          <a href="../supplier/index.php">Supplier</a>
        </li>
      </ul>
    </nav>

    <main class="h-[90vh]">
      <?=$content?>
    </main>

    <footer class="text-center">
      <small>&copy; 2024 by kevien</small>
    </footer>
</body>
</html>