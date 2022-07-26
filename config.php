<?php
// $hostname="localhost";
// $database="trial";
// $username="root";
// $password="";

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "website");

$con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$result=mysqli_query($con,"SELECT * FROM `nowplaying` where id='1' ");
$row=mysqli_fetch_array($result, MYSQLI_BOTH);

$result2=mysqli_query($con,"SELECT * FROM `nowplaying` where id='2' ");
$row2=mysqli_fetch_array($result2, MYSQLI_BOTH);

$result3=mysqli_query($con,"SELECT * FROM `nowplaying` where id='3' ");
$row3=mysqli_fetch_array($result3, MYSQLI_BOTH);

$result4=mysqli_query($con,"SELECT * FROM `nowplaying` where id='4' ");
$row4=mysqli_fetch_array($result4, MYSQLI_BOTH);

$result5=mysqli_query($con,"SELECT * FROM `nowplaying` where id='5' ");
$row5=mysqli_fetch_array($result5, MYSQLI_BOTH);

$result6=mysqli_query($con,"SELECT * FROM `nowplaying` where id='6' ");
$row6=mysqli_fetch_array($result6, MYSQLI_BOTH);




?>
