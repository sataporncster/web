<?php
	session_start();
		unset ($_SESSION['username']);
		unset ($_SESSION['timeout']);
	session_destroy();
	header("location:../index.html");
?>
