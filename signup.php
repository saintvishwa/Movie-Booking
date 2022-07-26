<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript">
        function validate() {
            if (document.myform.name.value === "") {
                alert("please enter a name!!");
                document.myform.name.focus();
                return false;
            }
            if (document.myform.password.value === "") {
                alert("please enter the password!!");
                document.myform.password.focus();
                return false;
            }
            if (document.myform.email.value === "") {
                alert("please enter a email!!");
                document.myform.email.focus();
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
                <form  method="POST" id="signup-form" name="myform" class="signup-form" onsubmit="return(validate());">
                    <h2>Sign up </h2>
                    <p class="desc">Welcome to <span>ASA MOVIES</span></p>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required style="padding-left: 10px;border-radius: 5px;"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email" required style="padding-left: 10px;border-radius: 5px;"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password"  placeholder="Password" required style="padding-left: 10px;border-radius: 5px;"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up" style="margin-left: 150px;"/>
                        <h5 style="margin-left: 205px;margin-top: 5px;">Or</h5>
                        <a href="login.php"> <button  class="form-submit submit" type="button" name="button" style="font-weight: bold;margin-left: 150px;" >Login</button> </a>

                        <!-- <a href="login.php"> <button  class="form-submit submit" type="button" name="button" style="font-weight: bold;" >Login</button> </a> -->
                    </div>
                    <div class="form-group">
                    </div>
                    <?php
                    /* insert query */
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

                       //echo "Success connecting to the db";


                           $name = $_POST['name'];

                           $email = $_POST['email'];
                           $password = $_POST['password'];

                           // $_SESSION["name"] = $name;

                        $sql = "INSERT INTO user (name,email,pass) VALUES ('$name','$email','$password')";


                         if($con->query($sql) == true){
                            echo "<p class='desc'>successfully Inserted!</span></p>";
                        }
                          else{
                              echo"error: $sql<br> $con->error";
                              }
                          $con->close();
                    }
                 //    if($result4){
                 //      echo "<p>User Already Exist</p>";
                 //    }
                 //    else {
                 //      $sql = "INSERT INTO user (name,email,pass) VALUES ('$name','$email','$password')";
                 //      if($con->query($sql) == true){
                 //         echo "<p class='desc'>successfully Inserted!</span></p>";
                 //     }
                 //       else{
                 //           echo"error: $sql<br> $con->error";
                 //           }
                 //       $con->close();
                 // }
                    ?>

                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
