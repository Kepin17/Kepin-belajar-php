  <?php 
  for ($i=$_POST['angka1'];$i<=$_POST['angka2'];$i++){


    if($i%2==0){
      echo "$i = genap<br>";
    }else {
      echo "$i = ganjil<br>";
    }
  }
  ?>