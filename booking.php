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
    <title>Seat booking</title>
    <link rel="stylesheet" href="booking.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="movie-container">
      <form class="" action="http://localhost/wtlproject/success.php" method="post">
         <label for="">Pick a movie:</label>
        <select id="movie" name="movie">
          <option value="<?php echo $row['ticket'] ?>"><?php echo $row['title'] ?> </option>
          <option value="<?php echo $row2['ticket'] ?>"><?php echo $row2['title'] ?> </option>
          <option value="<?php echo $row3['ticket'] ?>"><?php echo $row3['title'] ?> </option>
          <option value="<?php echo $row4['ticket'] ?>"><?php echo $row4['title'] ?> </option>
          <option value="<?php echo $row5['ticket'] ?>"><?php echo $row5['title'] ?> </option>
          <option value="<?php echo $row6['ticket'] ?>"><?php echo $row6['title'] ?> </option>
        </select>
        <ul class="showcase">
          <li>
            <div class="seat"></div>
            <small>N/A</small>
          </li>
          <li>
            <div class="seat selected"></div>
            <small>Selected</small>
          </li>
          <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
          </li>
        </ul>
        <div class="container">
          <div class="screen"> </div>

            <div class="row" style="margin-left: 50px;">
              <div class="seat occupied">  </div>
              <div class="seat occupied">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
            </div>

            <div class="row" style="margin-left: 50px;">
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
            </div>

            <div class="row" style="margin-left: 50px;">
              <div class="seat occupied">  </div>
              <div class="seat occupied">  </div>
              <div class="seat occupied">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
            </div>

            <div class="row" style="margin-left: 50px;">
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
            </div>

            <div class="row" style="margin-left: 50px;">
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
            </div>

            <div class="row" style="margin-left: 50px;">
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat occupied">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
              <div class="seat occupied">  </div>
              <div class="seat">  </div>
              <div class="seat">  </div>
            </div>
          </div>
          <p id="text">You have selected  <span id="count">0</span> seats for a price of $<span id="total">0</span> </p>
          <button type="submit" id='btn' name="button" style="height: 30px;width: 110px;border-radius: 10px;margin-left: 95px;margin-top: 20px;cursor: pointer;">Book</button>

          <!-- <button type="submit"  name="button" style="height: 30px;width: 110px;border-radius: 10px;margin-left: 95px;margin-top: 20px;cursor: pointer;">Book</button> -->

      </form>
    </div>

    </div>
    <div class="button">
      <a href="index.php"> <button type="button" name="button"  style="height: 30px;width: 110px;border-radius: 10px;margin: 30px;cursor: pointer;">Home</button> </a>
    </div>

    <script src="script.js"></script>
    <script type="text/javascript">
      var btn = document.getElementById("btn");
            btn.addEventListener("click", function(){
              var ticket=[];
              var user={};
              var e = document.getElementById("movie");
              var strUser = e.options[e.selectedIndex].text;
              user.seats=document.getElementById('count').innerText
              user.price=document.getElementById('total').innerText
              user.movie=strUser
              console.log(ticket);
              ticket.push(user)
              $.ajax({
                url:"conformation.php",
                method:"post",
                data:{ticket:JSON.stringify(ticket)} ,
                success:function(res){
                  console.log(res);
                }
              })
            });
    </script><br>
  </body>
</html>
