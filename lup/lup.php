  <?php 
  echo "Bilangan Genap : ";
  for ($i=$_POST['angka1'];$i>=$_POST['angka2'];$i--){

    if($i%2 ==0){
      echo "$i,";
    }
  }
  

  echo "<br>Bilangan Ganjil : ";
  for ($i=$_POST['angka1'];$i>=$_POST['angka2'];$i--){

    if($i%2 !=0){
      echo "$i,";
    }
  }
  ?>