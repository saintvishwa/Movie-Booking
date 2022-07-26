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
$result=mysqli_query($con,"SELECT * FROM `admin` where id='1' ");
$row=mysqli_fetch_array($result, MYSQLI_BOTH);?>

<!DOCTYPE html>
<html lang="en" dir="ltr" style="background: aliceblue;">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="admin.css">
    <title>Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'nav.php'; ?>

<div class="dashbord">
  <h2 style="ali: flex-start;margin-left: 500px;margin-top: 20px;" >Welcome <?php echo  $_SESSION["name"] ?></h2>

  <div class="card" style="width: 302px;margin-left: 175px;margin-top: 30px; float: left;">
    <img src="https://themoviesupdates.com/wp-content/uploads/2021/04/cropped-cropped-Movies-Updates-1-2.png" class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">Update Movies</h5>
      <p class="card-text">Enter the movies you want to display on home page. Remember to chose movie ID between 1 to 6.</p>
      <a href="http://localhost/wtlproject/admin/update.php" class="btn btn-primary">Click me</a>
    </div>
  </div>

  <div class="card" style="width: 302px;margin-left: 40px;margin-top: 30px; float: left ">
    <img src="https://thumbs.dreamstime.com/b/delete-glyph-vector-line-icon-delete-icon-102291534.jpg" style="height:130.563px;width: 200px;margin-left: 40px;" class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">Deleted Movies</h5>
      <p class="card-text">This page features all the movies which were previously displayed.</p>
      <a href="http://localhost/wtlproject/admin/logs.php" class="btn btn-primary" style="margin-top: 30px;">Click me</a>
    </div>
  </div>

  <div class="card" style="width: 302px;margin-left: 40px;margin-top: 30px; float: left ">
    <img src="https://carrickknowe.files.wordpress.com/2017/05/newsletter-logo.png" style="height:130.563px;width: 200px;margin-left: 40px;" class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">Newsletter</h5>
      <p class="card-text">This page displays  the users who has subscribed for the newsletter.</p>
      <a href="http://localhost/wtlproject/admin/newsletter.php" class="btn btn-primary" style="margin-top: 30px;">Click me</a>
    </div>
  </div>
  <div class="card" style="width: 302px;margin-left: 175px;margin-top: 30px; float: left;">
    <img src="https://i.imgur.com/PgwHSp0.png"  class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">Now Playing</h5>
      <p class="card-text">The movies displayed on the home screen is shown here.</p>
      <a href="http://localhost/wtlproject/admin/nowplaying.php" style="margin-top: 30px;" class="btn btn-primary">Click me</a>
    </div>
  </div>

  <div class="card" style="width: 302px;margin-left: 40px;margin-top: 30px; float: left ">
    <img src="https://previews.123rf.com/images/yevgenijd/yevgenijd1711/yevgenijd171100016/89720810-boleto-de-cine-aislado-sobre-fondo-blanco-plantilla-realista-de-boleto-de-cine-o-pel%C3%ADcula-vector.jpg" style="height:130.563px;width: 200px;margin-left: 45px;margin-bottom: 15px;" class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">Tickes Booked</h5>
      <p class="card-text">This page displays  the users who has booked tickets for the show.</p>
      <a href="http://localhost/wtlproject/admin/ticket_booked.php" class="btn btn-primary" style="margin-top: 30px;">Click me</a>
    </div>
  </div>

  <div class="card" style="width: 302px;margin-left: 40px;margin-top: 30px; float: left ">
    <img src="https://ccinfo.unc.edu/wp-content/uploads/sites/219/2018/03/GroupIcon.png" style="height:130.563px;width: 200px;margin-left: 45px;margin-bottom: 10px;margin-top: 10px;" class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">Users</h5>
      <p class="card-text">This page displays the users and their email.</p>
      <a href="http://localhost/wtlproject/admin/users.php" class="btn btn-primary" style="margin-top: 30px;">Click me</a>
    </div>
  </div>

</div>
  </body>
</html>
