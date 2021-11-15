<meta charset="utf-8">
<?PHP
include("../pages/connect.php");
$username=$_POST["username"];
$password=$_POST["password"];
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$tel=$_POST["phone"];

$sql = "select * from admin WHERE `username` = '$username'";
$sqlQuery = mysql_query($sql) or die("cannot query");
$num = mysql_num_rows($sqlQuery);

if($username == "" && $password == "" && $fname == "" && $lname == "" && $email == "" && $tel == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($username == "" && $password == "" && $fname == "" && $lname == "" && $email == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($username == "" && $password == "" && $fname == "" && $lname == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($username == "" && $password == "" && $fname == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($username == "" && $password == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($username == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($password == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($fname == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($lname == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($email == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif($tel == ""){
	echo "<script type='text/javascript'>alert('กรุณากรอกข้อมูลให้ครบ !');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
	}
	elseif(mysql_num_rows($sqlQuery)==0){
	$sql1 = "INSERT INTO `admin` 
	(`username`, `password`,`firstname`, `lastname`, `phone`, `email`,`status`) VALUES 
	('$username', '$password', '$fname', '$lname', '$tel', '$email', '1')";
	$sqlQuery1=mysql_query($sql1) or die ("insert error");
	echo "<script type='text/javascript'>alert('บันทึกข้อมูลเรียบร้อย');</script>";
	include ('destroy_session.php');
	echo "<meta http-equiv='refresh' content='0;url=Profile_admin.php'>";
}else{
	echo "<script type='text/javascript'>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
	echo "<meta http-equiv='refresh' content='0;url=register_admin.php'>";
}

?>