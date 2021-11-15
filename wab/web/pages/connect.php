<meta charset="utf-8">
<?php

    $host = "localhost";
	$user = "ccphone";
	$password = "a350f51b2e944e5e84";
	$dbname = "ccphone_db";
	$conn = mysql_connect($host, $user, $password, $dbname) or die("Connect Error :X");
	mysql_select_db($dbname, $conn);
	
	
	date_default_timezone_set('Asia/Bangkok');
	mysql_query("Set names 'utf8'");
	//echo "Connected";
?>