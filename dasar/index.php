<?php 
  $judul = strtoupper("Belajar PHP Dasar");
  $name = ucwords("kevien"); // kapital di depan
  $class = "XIRPL";
  
  /*
  strtoupper
  strtolower
  ucfirst
  ucwords
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $judul?></title>
</head>
<body>
  <h1>Hi, my name is <?php echo $name?> from <?php echo $class?></php></h1>
</body>
</html>