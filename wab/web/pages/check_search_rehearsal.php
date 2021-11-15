<?php
	$search = $_GET["search"];
	$keysearch = $_GET["keysearch"];
	if($search != ""){
		header("location:show_rehearsal.php?search=$search&keysearch=$keysearch");
	}else{
		header("refresh:0;url=show_rehearsal.php");
		echo '<script language="javascript">';
		echo 'alertify.alert("กรุณาใส่คำเพื่อค้นหา !")';
		echo '</script>';
	}	
?>
<meta charset="utf-8">