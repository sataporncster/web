<?php
	session_start();
	include('../pages/connect.php');
	if (!isset($_SESSION['username'])) {
		echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	}

	$inactive = 7200;
	if( !isset($_SESSION['timeout']) )
	$_SESSION['timeout'] = time() + $inactive; 

	$session_life = time() - $_SESSION['timeout'];

	if($session_life > $inactive)
	{  session_destroy(); header("Location:login.php");    }

	$_SESSION['timeout']=time();
?>