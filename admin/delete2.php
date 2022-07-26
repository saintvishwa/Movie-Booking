<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deleted</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body style="background: aliceblue;">
<?php include 'nav.php'; ?>
  </body>
</html>



<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "website");

$con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$email=$_GET['email'];
$query1="DELETE FROM user WHERE email='$email'";
$data=mysqli_query($con,$query1);
if($data){
  echo "Recorded deleted";
}
else {
  echo "Failed to delete";
}
?>
