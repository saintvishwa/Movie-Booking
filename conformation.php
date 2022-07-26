<?php
session_start();
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "website");

$con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


$ticket=json_decode($_POST['ticket']);
foreach ($ticket as $tck) {
  // print_r($tck->seats);
  // print_r($tck->price);
  $sql = "INSERT INTO book (ticket, price,movie)VALUES ('$tck->seats', '$tck->price','$tck->movie')";
  $result= mysqli_query($con,$sql);
  if($con->query($sql) == true){
     echo "<p class='desc'>successfully Inserted!</span></p>";
  }
   else{
       echo"error: $sql<br> $con->error";
       }
  $_SESSION["movie"]=$tck->movie;
  $_SESSION["seats"]=$tck->seats;
  $_SESSION["price"]=$tck->price;
}
 ?>
