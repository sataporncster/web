<?PHP
include ('destroy_session.php');
include("../pages/connect.php");
date_default_timezone_set('Asia/Bangkok');
$id	= $_POST["id"];
$status	= $_POST["status"];
$service_report = $_POST["service_report"];
$d_update = date('Y/m/d');
$t_update = date('H:i:s');
 

$username = $_SESSION["username"];

$strHi =  mysql_query("SELECT * FROM `admin` where username = '$username'") or die ("Error select 01");	
$objHi = mysql_fetch_array($strHi);	
$supervisor = $objHi['firstname']." ".$objHi['lastname'];

$sql = "SELECT * FROM `rehearsal` WHERE `rehearsal`.`r_id` = $id";
$sqlQuery = mysql_query($sql) or die("cannot query");
$num = mysql_num_rows($sqlQuery);
$objResult = mysql_fetch_array($sqlQuery);
if(mysql_num_rows($sqlQuery)!= 0){
	 $sql1 ="UPDATE `rehearsal` 
	 	SET `status` = '$status', 
		`service_report` = '$service_report',
		`d_update` = '$d_update',
		`t_update` = '$t_update',
		`supervisor` = '$supervisor'
		WHERE `rehearsal`.`r_id` = $id";
	 $sqlQuery1=mysql_query($sql1) or die ("insert error");
	echo "<script type='text/javascript'>alert('อัพเดทข้อมูลเรียบร้อย');</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	
}else{
	echo "<script type='text/javascript'>alert('ไม่สามารถอัพเดทข้อมูลนี้ได้');</script>";
	echo "<meta http-equiv='refresh' content='0;url=status_rehearsal.php'>";
}
?>
<meta charset="utf-8">