<meta charset="utf-8">
<?PHP
include("../pages/connect.php");
$p_id	= $_POST["p_id"];
$department	= $_POST["department_phone"];
$building	= $_POST["building_phone"];
$room		=$_POST["room_phone"];
$phone		=$_POST["tel_phone"];
$group		=$_POST["group_phone"];
$status		=$_POST["status_phone"];

$sql = "SELECT * FROM `telephone` where `telephone`.`p_id` = '$p_id'";
$sqlQuery = mysql_query($sql) or die("cannot query");
$num = mysql_num_rows($sqlQuery);
if(mysql_num_rows($sqlQuery)!= 0){
	 $sql1 ="UPDATE `telephone` SET
		`department` = '$department',
		`building` = '$building', 
		`room` = '$room', 
		`phone` = '$phone', 
		`group` = '$group',
		`status` = '$status'
		WHERE `telephone`.`p_id` = $p_id";
	 $sqlQuery1=mysql_query($sql1) or die ("insert error");
	echo "<script type='text/javascript'>alert('อัพเดทข้อมูลเรียบร้อย');</script>";
	include ('destroy_session.php');
	echo "<meta http-equiv='refresh' content='0;url=show_phone_number.php'>";
}else{
	echo "<script type='text/javascript'>alert('ไม่สามารถอัพเดทข้อมูลนี้ได้');</script>";
	echo "<meta http-equiv='refresh' content='0;url=edit_phone_number.php'>";
}

?>