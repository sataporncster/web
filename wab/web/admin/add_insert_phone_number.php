<meta charset="utf-8">
<?PHP
include("../pages/connect.php");
$department	= $_POST["department_phone"];
$building	= $_POST["building_phone"];
$room		=$_POST["room_phone"];
$phone		=$_POST["tel_phone"];
$group		=$_POST["group_phone"];
$status		=$_POST["status_phone"];

$sql = "SELECT * FROM `telephone` where `telephone`.`phone` = '$phone'";
$sqlQuery = mysql_query($sql) or die("cannot query");
$num = mysql_num_rows($sqlQuery);
if($department == "" && $building == "" && $room == "" && $phone == "" && $group == "" && $status == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($department == "" && $building == "" && $room == "" && $phone == "" && $group == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($department == "" && $building == "" && $room == "" && $phone == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($department == "" && $building == "" && $room == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($department == "" && $building == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($department == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($building == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($room == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($phone == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($group == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif($status == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}
elseif(mysql_num_rows($sqlQuery)==0){
	$sql1 = "INSERT INTO 
	`telephone` (`department`, `building`,`room`, `phone`, `group`, `status`) 
	 VALUES 	('$department','$building','$room','$phone','$group','$status')";
	 $sqlQuery1=mysql_query($sql1) or die ("insert error");
	echo "<script type='text/javascript'>alert('บันทึกข้อมูลเรียบร้อย');</script>";
	include ('destroy_session.php');
	echo "<meta http-equiv='refresh' content='0;url=show_phone_number.php'>";
}else{
	echo "<script type='text/javascript'>alert('มีเบอร์โทรนี้ในฐานข้อมูลแล้ว');</script>";
	echo "<meta http-equiv='refresh' content='0;url=insert_phone_number.php'>";
}

?>