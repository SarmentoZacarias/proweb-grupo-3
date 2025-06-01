<?php
$host = "localhost";
$user = "root";
$pass = "993199";
$db = "ispt_hackathon";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect){
      
      echo "Falha na conecxão";

}
?>