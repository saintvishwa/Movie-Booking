<?php
session_start();
include_once('connection.php');

function test_input($data) {

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {

	$username = test_input($_POST["adminname"]);
	$pass = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM admin");
	$stmt->execute();
	$users = $stmt->fetchAll();

	foreach($users as $user) {

		if(($user['username'] == $username) &&
			($user['pass'] == $pass)) {
				 $_SESSION["name"] = $username;
				$_SESSION["login_time_stamp"]=time();
				header("Location: adminpage.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
