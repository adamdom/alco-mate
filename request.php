<?php
session_start();
require "Services/Twilio.php";
$bac = $_GET['BAC'];
$usr = $_GET['usr'];
$pass = $_GET['pass'];

$thresh = 0.5;
$connect = new mysqli("127.0.0.1", "", "PASSWORD", "webapplications");

function text($msg) {
	require "Services/Twilio.php";
 
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account

	$sql = "SELECT password, username FROM userinfo ";
	$response = $connect->query($sql);
	while($row = mysqli_fetch_assoc($response))
	{
			if($row['password'] == $pass && $row['username'] == $usr)
			{

			}
	}


    $sms = $client->account->messages->sendMessage(14845885999, $num, "Hey $name, Monkey Party at 6PM. Bring Bananas!");

}


	$sql = "INSERT INTO userdata (most_recent) VALUES 	('" . $bac . "')";
	$response = $connect->query($sql);
	
$sql = "SELECT password, username FROM userdata ";
	$response = $connect->query($sql);
	while($row = mysqli_fetch_assoc($response))
	{
			if($row['password'] == $pass && $row['username'] == $usr)
			{
				if ($bac > $thresh) {
					
					$AccountSid = "ACa6a9a725a73f0998c6a8af0ce88bce34";
					$AuthToken = "45487f6df5afeaeafb8a55f8da341bc2";
					$client = new Services_Twilio($AccountSid, $AuthToken);
					$AuthToken = "45487f6df5afeaeafb8a55f8da341bc2";
					$sms = $client->account->messages->sendMessage(14845885999, $num, "Hey!Are you sure you want ___?");
				}
				break;
			}
	}
	

	
?>