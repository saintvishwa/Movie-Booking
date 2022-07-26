<?php include 'config.php';
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
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/ccc0102768.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-left: 140px;">
    <a class="navbar-brand" href="index.php">ASA Movies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="movies.php">Movies</a>
      <a class="nav-item nav-link" href="booking.php">Booking</a>
      <a class="nav-item nav-link" href="login.php">Log in</a>

      <p style="color:white;margin-top: 8px;margin-bottom: 0px;margin-left: 500px;">Welcome <?php echo $_SESSION["name"] ?></p>

      <div class="">
        <a href="http://localhost/wtlproject/logout.php"> <img style="margin-top: 8px;width: 30px;margin-left: 70px;" src="https://www.pngfind.com/pngs/m/339-3396821_png-file-svg-download-icon-logout-transparent-png.png" alt="">
      </a>
      </div>

    </div>
    </div>
    </nav>

    <!-- Slideshow container -->
    <div class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="<?php echo $row['slideimg'] ?>" width="1090px" height="382px">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="<?php echo $row2['slideimg'] ?>" width="1090px" height="382px" >
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img width="1090px" height="382px" src="<?php echo $row3['slideimg'] ?>" style="width:100%">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div><br>

    <!-- The dots/circles -->
    <div style="text-align:center ">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>




    <div class="nowplaying">
      <p style="padding-left: 400px ;font-size: 24px;
      font-weight: 700;
      line-height: 1.17;
      margin-bottom:30px;
      padding-top:10px;">Now Playing</p>

      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-4 thumb">
          <a class="thumbnail" href="#"> <img class="img-responsive" src="<?php echo $row['img'] ?>" width="250px" height="300px" alt=""> </a>
          <div class="book" style="margin-top: 5px;">
            <?php echo $row['imdb'] ?>
            <?php  $title=$row['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
            margin-left: 50px;
            ">Book Now!</button> </a>' ?>
          </div>

          <div class="movie">
            <p style="margin-bottom: 0px;"><?php echo $row['title'] ?></p>
          </div>
          <p><?php echo $row['genre'] ?></p>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-4 thumb">
          <a class="thumbnail" href="#"> <img class="img-responsive" src="<?php echo $row2['img'] ?>" width="250px" height="300px" alt=""> </a>
          <div class="book" style="margin-top: 5px;">
            <?php echo $row2['imdb'] ?>
            <?php  $title=$row2['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
            margin-left: 50px;
            ">Book Now!</button> </a>' ?>
          </div>

          <div class="movie">
            <p style="margin-bottom: 0px;"><?php echo $row2['title'] ?></p>
          </div>
          <p><?php echo $row2['genre'] ?></p>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-4 thumb">
          <a class="thumbnail" href="#"> <img class="img-responsive" src="<?php echo $row3['img'] ?>" width="250px" height="300px" alt=""> </a>
          <div class="book" style="margin-top: 5px;">
            <?php echo $row3['imdb'] ?>
            <?php  $title=$row3['title']; echo '<a href="http://localhost/wtlproject/booking.php?movie='.$title.'"> <button type="button" name="button" class="button btn-outline-dark" style="
            margin-left: 50px;
            ">Book Now!</button> </a>' ?>
          </div>

          <div class="movie">
            <p style="margin-bottom: 0px;"><?php echo $row3['title'] ?></p>
          </div>
          <p><?php echo $row3['genre'] ?></p>
        </div>
        </div>

      </div>
    <script type="text/javascript">
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>
<!--                                FOOTER                                    -->
    <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
    <footer>
        <div class="row my-5 justify-content-center py-5" style="background: #262626;margin-left: 110px;margin-right: 120px;margin-top: 10px;">
            <div class="col-11">
                <div class="row ">
                    <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                      <img src="logo1.png" alt="">
                        <div class="about">
                          <p style="margin-right: 150px;margin-top: 10px;">If you are planning for movie ticket bookings for the upcoming movies near you, don't look any further. Now it is easy to get on with online ticket booking with ASA Movies. Your one-stop solution for movies to watch this weekend. If you have been eagerly waiting for a movie that you can watch with your friends and family, now you
                            know where to get the tickets from.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                        <h6 class="mb-3 mb-lg-4 bold-text " style="color: #6c757d;"><b>MENU</b></h6>
                        <ul class="list-unstyled">
                            <li> <a href="http://localhost/wtlproject/index.php" style="color: white;text-decoration: auto;">Home</a></li>
                            <li> <a href="http://localhost/wtlproject/movies.php" style="color: white;text-decoration: auto;">Movies </a></li>
                            <li> <a href="http://localhost/wtlproject/booking.php" style="color: white;text-decoration: auto;">Booking </a></li>
                            <li> <a href="http://localhost/wtlproject/signup.php" style="color: white;text-decoration: auto;">Sign Up</a></li>
                            <li> <a href="http://localhost/wtlproject/admin/admin_login.php" style="color: white;text-decoration: auto;">Admin</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                        <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Newsletter</b></h6>
                        <form class="newsletter" action="http://localhost/wtlproject/index.php" method="post">
                          <input type="email" name="newsletter" placeholder="E-Mail" style="width: 158px;">
                          <button type="submit" class="btn btn-light" style="margin-top: 10px;padding-left: 3px;padding-right: 3px;padding-top: 3px;padding-bottom: 3px;">Subscribe</button>
                        </form>
                        <?php include 'newsletter.php'; ?>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                        <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"> <a href='https://www.facebook.com/adnan.shoaibali' target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> </a></span> <span class="mx-2"> <a href="https://www.linkedin.com/in/adnan-s-13401/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </span>
                           <span class="mx-2"> <a href="https://twitter.com/iamadnansa" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i></a></span> <span class="mx-2"> <a href="https://www.instagram.com/i.am.asa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </span> </p>
                           <small class="rights"><span>&#174;</span> ASA Movies All Rights Reserved.</small>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                        <h6 class="mt-55 mt-2 text-muted bold-text"><b>ADNAN ALI</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> adnan@gmail.com</small>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                        <h6 class="text-muted bold-text"><b>Customer Care</b></h6><small><span><i class="fa fa-phone" aria-hidden="true"></i></span> 1800-2800-3811</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
  </body>
</html>
