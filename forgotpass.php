<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recover</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript">
        function validate() {
            if (document.myform.email.value === "") {
                alert("please enter an email!!");
                document.myform.email.focus();
                return false;
            }
            if (document.myform.password.value === "") {
                alert("please enter a password!!");
                document.myform.password.focus();
                return false;
            }



            var emailID = document.myform.email.value;

            atpos = emailID.indexOf("@");

            dotpos = emailID.lastIndexOf(".");

            if (atpos < 1 || (dotpos - atpos < 2)) {
                alert("Please enter correct email ID");
                document.myform.email.focus();

                return false;
            }

            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.myform.email.value)) {
                return true;
            } else {
                alert("please enter valid email id!!");
                return false;
            }
        }
    </script>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" name="myform " onsubmit="return(validate());">
                    <h2>Recover Password</h2>
                    <p class="desc">Welcome to <span>ASA MOVIES</span></p>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email" required style="padding-left: 10px;border-radius: 5px;"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="New Password" required style="padding-left: 10px;border-radius: 5px;"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Update" style="margin-left: 150px;"/>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


<?php
if(isset( $_POST['submit'])){
$host="localhost";
  $db_name="website";
  $username="root";
  $password="";

   // Create a database connection
   $con = mysqli_connect($host, $username, $password, $db_name);

  // Check for connection success
   if(!$con){
       die("connection to this database failed due to" . mysqli_connect_error());
  }
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql="UPDATE user SET pass ='$password'WHERE email ='$email'";

  $result4 = $con->query($sql);
  if($result4){
    header('Location: login.php');
  }

      $con->close();}

         ?>
