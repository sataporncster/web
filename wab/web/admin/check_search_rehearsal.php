<?php
	$search = $_GET["search"];
	$keysearch = $_GET["keysearch"];
	if($search != ""){
		header("location:/CCPhone/admin/production/index.php?search=$search&keysearch=$keysearch");
	}else{
		header("refresh:0;url=/CCPhone/admin/production/index.php");
		echo '<script language="javascript">';
		echo 'alert("กรุณาใส่คำเพื่อค้นหา !")';
		echo '</script>';
	}	
?>
<meta charset="utf-8">