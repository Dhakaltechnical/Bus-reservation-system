<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbName = "bususer";
  $con = mysqli_connect($host,$username,$password,$dbName);

  if(!$con){
    die("can not connect with database");
  }
   
?>