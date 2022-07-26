<?php
session_start();
if(isset($_SESSION["name"]))
{
    if(time()-$_SESSION["login_time_stamp"] >600)
    {
        session_unset();
        session_destroy();
        header("Location:admin_login.php");
    }
    else{
      $_SESSION['login_time_stamp']=time();
    }
}
else
{
    header("Location:admin_login.php");
}
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "website");

$con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if(!$con){
  die('sorry couldnt connect to the data base: '. mysqli_connect_error());
}
else {
  echo "connction successful <br>";
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $id=$_POST['id'];
  $img=$_POST['img'];
  $title=$_POST['title'];
  $imdb=$_POST['imdb'];
  $genre=$_POST['genre'];
  $sliding=$_POST['sliding'];
  $ticket=$_POST['price'];

  $sql="UPDATE nowplaying SET img ='$img', title ='$title', imdb = '$imdb', genre='$genre',slideimg='$sliding', ticket='$ticket' WHERE id ='$id'";
  $result= mysqli_query($con,$sql);

  if($result){
    echo "record inserted successfully";
  }
  else {
    echo "record not insertes cos:". mysqli_error($con);
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body style="background: aliceblue">
<?php include 'nav.php'; ?>
  <h5 style="text-align: center;margin-top: 20px;">UPDATE MOVIES!</h5>

  <form action="" method="post" style="width: 500px;margin-left: 425px;margin-top: 30px;">

  <div class="form-outline mb-4">
      <select name="id" id="id" class="form-control" >
        <option value="">Select ID</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="img"  class="form-control" name="img" placeholder="Image link">
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="title" class="form-control" name="title" placeholder="Title">
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="imdb" class="form-control" name="imdb" placeholder="IMDB Plugin">
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="genre" class="form-control" name="genre" placeholder="Genre">
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="sliding" class="form-control" name="sliding" placeholder="Landscape Poster">
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="sliding" class="form-control" name="price" placeholder="Ticket Price($)">
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 501px;">Update</button>
</form>
  </body>
</html>
