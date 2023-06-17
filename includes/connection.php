<?php 
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ciooforex";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);

  if(!$conn){
      echo "Failed to connect to database";
      die();
  }

?>