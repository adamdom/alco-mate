<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$connect = new mysqli("127.0.0.1", "", "PASSWORD", "webapplications");
$go = false
$sql = "SELECT password, username FROM userinfo ";
$response = $connect->query($sql);
	while($row = mysqli_fetch_assoc($response))
	{
			if($row['password'] == $pass && $row['username'] == $usr)
			{
				$go = true;
				break;
			}
	}
if(go) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header('Location: index.php');  
}
else {
	echo "Invalid Information"
}
?>
