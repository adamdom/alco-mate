<?php
$emergency= "";
$phone = "";

$usr = $_GET['usr'];
$pass = $_GET['pass'];
if( isset($_GET['emergency']) )
	$emergency = $_GET['emergency'];
if( isset($_GET['phone']) )
	$credit_card = $_GET['phone'];
if( isset($_GET['address']) )
	$credit_card = $_GET['phone'];

$connect = new mysqli("127.0.0.1", "", "PASSWORD", "webapplications");
$sql = "SELECT password, username FROM userinfo";
	$response = $connect->query($sql);

while($row = mysqli_fetch_assoc($response))
{
	if($row['password'] == $pass && $row['username'] == $usr)
	{
		if(strlen($phone) > 0) {
			$update = "UPDATE userdata SET uber_usr = '" . $phone ."' WHERE username='" . $row['username'] . "' AND password = '" . $row['password'] . "'";
			$response = $connect->query($update);
		} 
		if(strlen($emergency) > 0) {
			$update = "UPDATE userdata SET emergency_contact = '" . $emergency ."' WHERE username='" . $row['username'] . "'AND password = '" . $row['password'] . "'";
			$response = $connect->query($update);
		} 
		if(strlen($address) > 0) {
			$update = "UPDATE userdata SET emergency_contact = '" . $address ."' WHERE username='" . $row['username'] . "'AND password = '" . $row['password'] . "'";
			$response = $connect->query($update);
		} 
		break;
	}
}


?>
