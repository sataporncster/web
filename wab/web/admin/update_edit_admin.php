<?php 
	include('../pages/connect.php');
	
	$id = $_GET['id'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	
	$sql = "SELECT * FROM admin WHERE admin_id = '$id'";
	$sqlQuery = mysql_query($sql) or die("cannot query");
	if(mysql_num_rows($sqlQuery)!=0){
		$sql1 = "UPDATE `admin` SET
		`username` = '$username',
		`password` = '$password', 
		`firstname` = '$firstname', 
		`lastname` = '$lastname', 
		`phone` = '$phone', 
		`email` = '$email' 
		WHERE `admin`.`admin_id` = $id ";
		$sqlQuery1 = mysql_query($sql1) or die ("NO Update");
		echo "<script type='text/javascript'>alert('บันทึกข้อมูลเรียบร้อย');</script>";
		echo "<meta http-equiv='refresh' content='0;url=Profile_admin.php'>";
	}else{
		echo "<script type='text/javascript'>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
		echo "<meta http-equiv='refresh' content='0;url=Profile_admin.php'>";
	}
?>