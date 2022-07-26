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
  <title>Newsletter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
  table {
  counter-reset: section;
  }

  .count:before {
  counter-increment: section;
  content: counter(section);
  }
  </style>
</head>
<body style="background: aliceblue;">
<?php include 'nav.php'; ?>
<h5 style="text-align: center;margin-top: 20px;">Newsletter signee</h5>

<?php
$username = "root";
$password = "";
$database = "website";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM newsletter";


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
          <td> <font style="font-family: sans-serif;font-weight: bold;">Email</font> </td>
          <td> <font style="font-family: sans-serif;font-weight: bold;">Operations</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field2name = $row["email"];

        echo '<tr>
                  <td class="count"></td>
                  <td>'.$field2name.'</td>
                  <td> <a href="http://localhost/wtlproject/admin/delete.php?email='.$field2name.'">Delete </td>
              </tr>';
    }
    $result->free();
}

?>

</body>
</html>
