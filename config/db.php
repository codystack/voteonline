<?php
$conn = new mysqli('localhost', 'nigeabvg_vo', 'Webify2020!!', 'nigeabvg_vo');
error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>