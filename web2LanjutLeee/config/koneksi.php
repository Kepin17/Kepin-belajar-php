<?php 

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "olyzano_store";

  $conn = mysqli_connect("$host", "$user", "$pass", "$db");


  // validate Check

  if(mysqli_connect_error()){
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
  }

?>