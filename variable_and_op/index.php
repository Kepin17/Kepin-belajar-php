<?php 

  //  tipe data int and float

	$a = 55;
	$b = 2.3;
	$hasil = $a * $b; //contoh perkalian
	echo $hasil; 

  $a=10;
  $a++;
  echo $a; // menghasilkan nilai 11
  $b = 10;
  $b--;
  echo $b; //menghasilkan nilai 9
  $c = 10;
  $c++;
  $c++;
  echo $c;//akan menghasilkan nilai 12 karena menggunakan 2x operator increment

  //  tipe data String
  $name = "kevien";
  $class = "XIRPL";
  $penjelasan = $name . " from " . $class;

  // tipe data boolean
  $a	= TRUE;
  $b	= "TRUE";
  var_dump($a);
  echo "<br>";
  var_dump($b);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  echo 
  "
  <h1>
    $penjelasan
  </h1>
   " ?>
</body>
</html>