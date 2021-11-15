<?php
	$search_phone = $_GET["search_phone"];

	if($search_phone != ""){
		header("location:index.php?search_phone=$search_phone");
	}else{
		header("refresh:0;url=index.php");
		echo '<script language="javascript">';
		echo 'alert("กรุณาใส่คำเพื่อค้นหา !")';
		echo '</script>';
	}	
?>
<meta charset="utf-8">