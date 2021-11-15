<?php
	include('../pages/connect.php');
	$id = $_GET['id'];
	$strHi =  mysql_query("SELECT * FROM `rehearsal` where r_id = '$id'") or die ("Error select 01");	
	$objHi = mysql_fetch_array($strHi);
	if($objHi['status'] == 0){
		echo "<meta http-equiv='refresh' content='0;url=../admin/index.php'>";
	}else{
		echo "<meta http-equiv='refresh' content='0;url=../admin/show_rehearsal.php'>";
	}
?>