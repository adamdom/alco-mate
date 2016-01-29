<html>
	<head>
		<title>Uber</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<section style="border-radius:15px;">
			<center>
<?php
$url = "https://api.postmates.com/v1/customers/cus_KeFm9C8sH9i_n-/delivery_quotes";

    $uname = "059bd860-94e7-418f-baa2-e3e0ce787488";
    $pwd = null;

    $process = curl_init($url);
    curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded','Accept: application/json'));
    curl_setopt($process, CURLOPT_HEADER, 1);
    curl_setopt($process, CURLOPT_USERPWD, $uname . ":" . $pwd);
    curl_setopt($process, CURLOPT_TIMEOUT, 30);
    curl_setopt($process, CURLOPT_POST, 1);
    curl_setopt($process, CURLOPT_POSTFIELDS, "dropoff_address=3700 Spruce Street. Philadelphia PA, 19104&pickup_address=20 S 36th St, Philadelphia, PA 19104");
    curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
    $return = curl_exec($process);
	$offset = strpos($return, "_eta");
	$sub = substr($return, $offset+19, 5);
	$time = intval(substr($sub,0, 2));
	if ($time < 5) {
		$time = $time + 16;
	}
	else {
		$time = $time - 5;
	}
	$str = "";
	if ($time < 10) {
		$str = $str . "0";
	}
	$str = $str . $time . substr($sub,2);
    echo "<h2 style=\"height: 10%;\">I hope your hungry! Your pizza arrives in: </h2><h1 style=\"font-size: 2.5em\">" . $str . "</h1>";
?>
</center>
		</section>
		<script src="js/jquery-2.1.1.min.js"></script>
	</body>
</html>