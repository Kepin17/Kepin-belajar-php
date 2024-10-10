<?php 

  $siswa = [
    [
      "name" => "kevien",
      "class" => "23TIA6",
      "age" => 18
    ],
    [
      "name" => "Angga",
      "class" => "23TIA6",
      "age" => 19
    ],
    [
      "name" => "Roi",
      "class" => "23TIB6",
      "age" => 19
    ],
    [
      "name" => "Safira",
      "class" => "23TIB6",
      "age" => 19
    ]
    ];

    $a = 0;
    for($i=1;$i<=20;$i++){
    if($i%5==0){
        $a = $a+1;
        echo $a;
    }   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <?php foreach($siswa as $key=>$value){ ?>
  <ul>
    <li>Nama : <?= $value["name"]?></li>
    <li>Kelas : <?= $value["class"]?></li>
    <li>Umur : <?= $value["age"]?></li>
  </ul>
  <?php } ?>
</body>
</html>