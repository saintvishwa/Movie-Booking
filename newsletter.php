<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $email=$_POST['newsletter'];
  $sql="INSERT INTO newsletter (email) VALUES ('$email')";
  $result= mysqli_query($con,$sql);

  if($result){
    echo "Thanks for subscribing!";
  }
  else {
    echo "record not insertes cos:". mysqli_error($con);
  }
}

?>
