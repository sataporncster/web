<?php 
	include('../../connect.php');
	
	$id = $_GET['id'];
	
	
	$sql = "SELECT * FROM `rehearsal` where `rehearsal`.`r_id` = '$id' ";
	$sqlQuery = mysql_query($sql) or die("cannot query");
	$objResult = mysql_fetch_array($sqlQuery);
			$sql1 = "DELETE FROM `rehearsal` WHERE `rehearsal`.`r_id` = '$id'";
			$sqlQuery1 = mysql_query($sql1) or die ("NO Delete");
			echo "<script type='text/javascript'>alert('ลบข้อมูลเรียบร้อย');</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>