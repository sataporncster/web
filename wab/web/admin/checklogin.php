<?php 
session_start();
include('../pages/connect.php');

	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	$messagename = " กรุณากรอก ชื่อผู้ใช้ ";
	$messagepass = " กรุณากรอก รหัสผ่าน ";
	$messagenamenotture = " กรุณากรอก ชื่อผู้ใช้ ให้ถูกต้อง";
	$messagepassnotture = " กรุณากรอก รหัสผ่าน  ให้ถูกต้อง";
	$messagenotture = " กรุณากรอก ชื่อผู้ใช้ และ รหัสผ่าน";
	$messagestatus = " ชื่อไอดีถูกระงับ ";

	$u = mysql_real_escape_string($user);
	$p = mysql_real_escape_string($pass);
	if($user == '' && $pass == '')
		{
			echo "<script type='text/javascript'>alert('$messagenotture');</script>";
	 		echo "<script type='text/javascript'>window.history.back();</script>";
			break;
		}

	if($user == '')
		{
	 		echo "<script type='text/javascript'>alert('$messagename');</script>";
	 		echo "<script type='text/javascript'>window.history.back();</script>";
			break;
		}
	if($pass == '')
		{
			echo "<script type='text/javascript'>alert('$messagepass');</script>";
			echo "<script type='text/javascript'>window.history.back();</script>";
			break;
		}
		
		
	  		$strSQL =  mysql_query("SELECT * FROM admin where username = '$u'and password = '$p'");
	  		$num_row = mysql_num_rows($strSQL);
	  		$objResult = mysql_fetch_array($strSQL);
	  if($num_row == 0)
	    {
		 echo "<script type='text/javascript'>alert('$messagenotture');</script>";
		 echo "<script type='text/javascript'>window.history.back();</script>";
	    }
	  else
	     {
		
		   $_SESSION["password"] = $objResult["password"];
		   $_SESSION["username"] = $objResult["username"];
		   
		   session_write_close();
		   if($user != $objResult["username"] ){
			   	echo "<script type='text/javascript'>alert('$messagenamenotture');</script>";
	 			echo "<script type='text/javascript'>window.history.back();</script>";
				break;
			}elseif($pass != $objResult["password"]){
				echo "<script type='text/javascript'>alert('$messagepassnotture');</script>";
	 			echo "<script type='text/javascript'>window.history.back();</script>";
				break;
			}
	   	    	    echo "<script type='text/javascript'>alert('ยินดีตอนรับเข้าสู่ระบบ');</script>";
			    	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		 }
		mysql_close();
	
?>