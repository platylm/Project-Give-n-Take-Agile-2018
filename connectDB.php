<?php
$servername = "localhost";
$username = "root";
$password = "password";
try {
  $con = new PDO("mysql:host=$servername;dbname=method", $username, "");
  // set the PDO error mode to exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  }
catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
  }
?>