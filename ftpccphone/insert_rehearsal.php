<html>
<meta charset="utf-8">
 <script src="../package/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="../package/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="../package/dist/sweetalert2.min.css">
<head>
<script src="../package/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="../package/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="../package/dist/sweetalert2.min.css">
</head>
<body>
<?PHP

		include("connect.php");
date_default_timezone_set('Asia/Bangkok');
$date = date('Y/m/d');
$time = date('H:i:s');
$phone			= $_POST["phone"];
$department		= $_POST["department"];
$building		=$_POST["building"];
$room			=$_POST["room"];
$group	=$_POST["group_phone"];
$name_user		=$_POST["name_user"];
$contact_tel	=$_POST["contact_tel"];
$other			=$_POST["other"];

$message ="\n".'วันที่แจ้ง:'.$date.'เวลา:'.$time."\n".'เบอร์ที่เสีย:'.$phone."\n".'หน่วยงาน: '.$department."\n".'อาคาร: '.$building."\n".'ห้อง: '.$room."\n".'ผู้แจ้ง: '.$name_user."\n".'เบอร์ติดต่อ: '.$contact_tel."\n".'อาการเสีย: '.$other;

if($phone <>"" || $contact_tel <> "" || $name_user <> "") {
	
	sendlinemesg();

	header('Content-Type: text/html; charset=utf-8');
	$res = notify_message($message);
	echo "<center>;ส่งข้อความเข้าไลน์กลุ่มเรียบร้อยแล้ว</center>";
} else {
	echo "<center>Error: กรุณากรอกข้อมูลให้ครบถ้วน</center>";
}

function sendlinemesg() {
	
    define('LINE_API',"https://notify-api.line.me/api/notify");
	define('LINE_TOKEN','SEpYeCqjZYo34OnDWckjwAFHKMRLM917FYEBeJHT44l');

	function notify_message($message){

		$queryData = array('message' => $message);
		$queryData = http_build_query($queryData,'','&');
		$headerOptions = array(
			'http'=>array(
				'method'=>'POST',
				'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
						."Authorization: Bearer ".LINE_TOKEN."\r\n"
						."Content-Length: ".strlen($queryData)."\r\n",
				'content' => $queryData
			)
		);
		$context = stream_context_create($headerOptions);
		$result = file_get_contents(LINE_API,FALSE,$context);
		$res = json_decode($result);
		return $res;

	}

}
if($other==''){
	$sql1 = "INSERT INTO `rehearsal`
				 (`date`,`department`, `building`,`room`, `phone`, `group`, `name_user`,`contact_tel`,`other`, `status`, `time`) 
	 VALUES 	('$date','$department','$building','$room','$phone','$group','$name_user','$contact_tel','ไม่มี', '0', '$time')";
	 $sqlQuery1=mysql_query($sql1) or die ("insert error");
	echo "<script type='text/javascript'>swal('บันทึกข้อมูลเรียบร้อย');</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?action=show_rehearsal'>";
}else{
	$sql1 = "INSERT INTO `rehearsal`
				 (`date`,`department`, `building`,`room`, `phone`, `group`, `name_user`,`contact_tel`,`other`, `status`, `time`) 
	 VALUES 	('$date','$department','$building','$room','$phone','$group','$name_user','$contact_tel','$other', '0', '$time')";
	 $sqlQuery1=mysql_query($sql1) or die ("insert error");
	echo "<script type='text/javascript'>swal('บันทึกข้อมูลเรียบร้อย');</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php?action=show_rehearsal'>";
}


?>
</body>
</html>