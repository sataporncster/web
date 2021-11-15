<?php
	$check_phone = $_GET["check_phone"];
	if($check_phone != " "){
		header("location:Rehearsal.php?check_phone=$check_phone&p=$check_phone");
	}else{
		header("refresh:0;url=Rehearsal.php");
		echo '<script language="javascript">';
		echo 'alertify.alert("!!!!")';
		echo '</script>';
	}	
?>
<meta charset="utf-8">