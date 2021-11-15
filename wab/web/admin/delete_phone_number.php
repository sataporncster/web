<?php 
	include('../pages/connect.php');
	
	$id = $_GET['id'];
	
	
	$sql = "SELECT * FROM `telephone` where `telephone`.`p_id` = '$id'";
	$sqlQuery = mysql_query($sql) or die("cannot query");
	$objResult = mysql_fetch_array($sqlQuery);
		
		if(isset($objResult['p_id']) != ''){
			
			$sql1 = "DELETE FROM `telephone` WHERE `telephone`.`p_id` = '$id'";
			$sqlQuery1 = mysql_query($sql1) or die ("NO Delete");
			echo "<script type='text/javascript'>alert('ลบข้อมูลเรียบร้อย');</script>";
			echo "<meta http-equiv='refresh' content='0;url=show_phone_number.php'>";
		}else{
			echo "<script type='text/javascript'>alert('ไม่สามารถลบเบอร์นี้ได้ !!');</script>";
			echo "<meta http-equiv='refresh' content='0;url=show_phone_number.php'>";
		}	
?>