<?php
session_start();
$usr = $_GET['num'];
$pass = $_GET['pass'];
$phone = $_GET['phone'];
$emergency = $_GET['emergency'];
$address = $_GET['address'];
$go = true;

$sql = "SELECT password, username FROM userinfo ";
$connect = new mysqli("localhost:3306", "root", "rootpass", "webapplications");
$response = $connect->query($sql);
while($row = mysqli_fetch_assoc($response))
{
		if($row['username'] == $usr)
		{
			$go = false;
			echo "Username taken!";
		}
}
if($go == true) {
	echo "asdfasdfasdfasdfa";
	$sql = "INSERT INTO userdata (username, password, emergency_contact, phone_number, address) VALUES ('" . $usr . "','" . $pass . "','" . $emergency. "','" . $phone. "','" . $address . "')";
	$response = $connect->query($sql);
}
?>
<html>
</html>