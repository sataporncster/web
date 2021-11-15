<?php
	$search_phone = $_GET["search_phone"];
	$keysearch = $_GET["keysearch"];
	if($search_phone != ""){
		header("location:../admin/show_phone_number.php?search_phone=$search_phone&keysearch=$keysearch");
	}else{
		header("refresh:0;url=../admin/show_phone_number.php");
		echo '<script language="javascript">';
		echo 'alert("กรุณาใส่คำเพื่อค้นหา !")';
		echo '</script>';
	}	
?>
<meta charset="utf-8">