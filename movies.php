<?php include 'config.php'; session_start();
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
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movies List</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php include 'navbar.php'; ?>

<div class="upcoming">
  <p style="font-size: 24px;
    font-weight: 700;
    line-height: 1.17;
    margin-bottom:30px; margin-right: 30px;padding-left: 20px;
    padding-top: 10px; color: #FFFCDC">Coming soon <a href="coming.php" style="float: right;font-size: smaller;
    font-weight: 400;color: greenyellow;text-decoration: none; ">Explore upcoming movies ></a> </p>

</div>

<div class="movielist" style="background: #191919; color: #FFFCDC;">
  <p style="padding-left: 400px ;font-size: 24px;
    font-weight: 700;
    line-height: 1.17;
    margin-bottom:30px;
    padding-top:10px;">Recomended movies: </p>
<div class="row">


<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="<?php echo $row['img'] ?>" width="250px" height="300px" alt="">
    </a>
    <?php echo $row['imdb'] ?>
    <?php  $title=$row['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
    margin-left: 45px;
    margin-top: 5px;
    ">Book Now!</button> </a>' ?>
  <div class="moviename">
      <p style="margin-bottom: 0px;"><?php echo $row['title'] ?></p>
    </div>
    <p><?php echo $row['genre'] ?></p>
</div>

<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="<?php echo $row2['img'] ?>" width="250px" height="300px" alt="">
    </a>
    <?php echo $row2['imdb'] ?>
    <?php  $title=$row2['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
    margin-left: 45px;
    margin-top: 5px;
    ">Book Now!</button> </a>' ?>
  <div class="moviename">
      <p style="margin-bottom: 0px;"><?php echo $row2['title'] ?></p>
    </div>
    <p><?php echo $row2['genre'] ?></p>
</div>

<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="<?php echo $row3['img'] ?>" width="250px" height="300px" alt="">
    </a>
    <?php echo $row3['imdb'] ?>
    <?php  $title=$row3['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
    margin-left: 45px;
    margin-top: 5px;
    ">Book Now!</button> </a>' ?>
  <div class="moviename">
      <p style="margin-bottom: 0px;"><?php echo $row3['title'] ?></p>
    </div>
    <p><?php echo $row3['genre'] ?></p>
</div>

<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="<?php echo $row4['img'] ?>" width="250px" height="300px" alt="">
    </a>
    <?php echo $row4['imdb'] ?>
    <?php  $title=$row4['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
    margin-left: 45px;
    margin-top: 5px;
    ">Book Now!</button> </a>' ?>
  <div class="moviename">
      <p style="margin-bottom: 0px;"><?php echo $row4['title'] ?></p>
    </div>
    <p><?php echo $row4['genre'] ?></p>
</div>

<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="<?php echo $row5['img'] ?>" width="250px" height="300px" alt="">
    </a>
    <?php echo $row5['imdb'] ?>
    <?php  $title=$row5['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
    margin-left: 45px;
    margin-top: 5px;
    ">Book Now!</button> </a>' ?>
  <div class="moviename">
      <p style="margin-bottom: 0px;"><?php echo $row5['title'] ?></p>
    </div>
    <p><?php echo $row5['genre'] ?></p>
</div>

<div class="col-lg-4 col-md-4 col-xs-4 thumb">
    <a class="thumbnail" href="#">
        <img class="img-responsive" src="<?php echo $row6['img'] ?>" width="250px" height="300px" alt="">
    </a>
    <?php echo $row6['imdb'] ?>
    <?php  $title=$row6['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
    margin-left: 45px;
    margin-top: 5px;
    ">Book Now!</button> </a>' ?>
  <div class="moviename">
      <p style="margin-bottom: 0px;"><?php echo $row6['title'] ?></p>
    </div>
    <p><?php echo $row6['genre'] ?></p>
</div>



</div>

</div>
  </body>
</html>
