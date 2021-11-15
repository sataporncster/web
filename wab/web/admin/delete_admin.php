<?php 
	include('../pages/connect.php');
	
	$admin_id = $_GET['id_admin'];
	
	
	$sql = "SELECT * FROM `admin` WHERE `admin`.`admin_id` = '$admin_id' ";
	$sqlQuery = mysql_query($sql) or die("cannot query");
	$objResult = mysql_fetch_array($sqlQuery);
		
		if($objResult['status'] != 0){
			
			$sql1 = "DELETE FROM `admin` WHERE `admin`.`admin_id` = '$admin_id'";
			$sqlQuery1 = mysql_query($sql1) or die ("NO Delete");
			echo "<script type='text/javascript'>alert('ลบข้อมูลเรียบร้อย');</script>";
			echo "<meta http-equiv='refresh' content='0;url=Profile_admin.php'>";
		}else{
			echo "<script type='text/javascript'>alert('ไม่สามารถลบข้อมูลของ admin คนนี้ได้');</script>";
			echo "<meta http-equiv='refresh' content='0;url=Profile_admin.php'>";
		}	
?>