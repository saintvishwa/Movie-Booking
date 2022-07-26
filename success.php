
<?php
session_start();
if(isset($_SESSION["name"]))
{
    if(time()-$_SESSION["login_time_stamp"] >600)
    {
        session_unset();
        session_destroy();
        header("Location:login.php");
    }
    else{
      $_SESSION['login_time_stamp']=time();
    }
}
else
{
    header("Location:login.php");
}
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "website");

$con= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$result=mysqli_query($con,"SELECT * FROM `book` ORDER BY id DESC ");
$row=mysqli_fetch_array($result, MYSQLI_BOTH);
?>

<html>
  <head>
    <title>Success</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>

    <link rel="stylesheet" href="book.css">
    <body>
      <?php include 'navbar.php'; ?>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1>
        <p>Thank you <span style="font-weight: bold;"><?php echo $_SESSION['name'];  ?></span>  !!</p>
       <p>Here are your booking information for <span style="font-weight: bold;"><?php echo $row['movie'] ?></span>: </p>
       <p><img src="https://i.pinimg.com/originals/d7/b1/14/d7b114ba151e3fbf99aa9e5512ce2c89.jpg" style="width: 40px;margin-right: 20px;margin-top: 5px;"alt="">  <?php echo $row['ticket'] ?> tickets </p>
       <p> <img src="https://media.istockphoto.com/vectors/money-bag-icon-on-white-background-vector-vector-id522097277?b=1&k=20&m=522097277&s=612x612&w=0&h=Goq21JboR_ibNGtJRkEUfsZZZijVILS-6SsBVtw1xCQ=" style="width: 40px;margin-right: 35px;" alt=""> Rs.<?php echo $row['price'] ?> </p>
       <!-- <br><p>We booked your show :<br/> we'll be in touch shortly!</p> -->
    <!-- <a href="index.php"><button class="btn btn-primary">Home</button></a> -->
      </div>
    </body>
</html>
