<?php session_start();
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
} ?>
<html>
<head>
  <title>Now Playing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
  <div class="navbar-brand" href="#">
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fvectorified.com%2Fimages%2Fadmin-logo-icon-6.png&f=1&nofb=1"style="
  margin-right: 10px;
  margin-top: 5px;
  margin-left: 5px;
" alt="" width="30" height="24" class="d-inline-block align-text-top">
<a href="http://localhost/wtlproject/admin/adminpage.php" style="color: white;text-decoration: none;">Dashboard</a>
  </div>
</div>
</nav>
<h5 style="text-align: center;margin-top: 20px;">MOVIE on Home Page</h5>

<?php
$username = "root";
$password = "";
$database = "website";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM nowplaying";


echo '<table border="3" cellspacing="2" cellpadding="2" style="
    margin-left: 450px;
    width: 504px;
    height: 70px;
    margin-top: 20px;
    border-color: black;
    background-color: beige;
    text-align: center;
    font-family: sans-serif;


">
      <tr>
          <td> <font style="font-family: sans-serif;font-weight: bold;">ID</font> </td>
          <td> <font style="font-family: sans-serif;font-weight: bold;">Title</font> </td>
          <td> <font style="font-family: sans-serif;font-weight: bold;">Genre</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["title"];
        $field3name = $row["genre"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
              </tr>';
    }
    $result->free();
}
?>
</body>
</html>
