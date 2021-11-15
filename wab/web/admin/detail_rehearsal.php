<?php 
	include ('destroy_session.php');
	include('../pages/connect.php');
	$username = $_SESSION["username"];
	$strHi =  mysql_query("SELECT * FROM `admin` where username = '$username'") or die ("Error select 01");	
	$objHi = mysql_fetch_array($strHi);	

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <title>Telephone MSU</title>
		  <!-- DataTables Responsive CSS -->
		 <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    </head>
	<?php include('header.php'); ?> 
	 <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">สวัสดี คุณ<?=$objHi['firstname']." ".$objHi['lastname']?></h2> 
                <p> เข้าสู่ระบบบริหารจัดการ </p>
            </div>
<div class="container-fluid">
<div class="panel-heading">ข้อมูลโทรศัพท์ทั้งหมด  </div>    
        	<?php 
				include('../pages/connect.php');
				$id = $_GET['id'];
				$strSQL =  mysql_query("SELECT * FROM `rehearsal` where r_id = $id ");
				$objResult = mysql_fetch_array($strSQL);
				$date_to= date($objResult['date']);
				$date_update= date($objResult['d_update']);
				function ConvDate($convD) {
 					$GGyear=substr($convD,0,4)+543; //ตัดเอาปี ค.ศ. มาทำเป็น พ.ศ.
 					$GGmonth=substr($convD,5,2); //ตัดเอาเดือน
 					$GGdate =substr($convD,8,2); //ตัดเอาวันที่
 					$Buffdate=$GGdate."-".$GGmonth."-".$GGyear; //เรียงใหม่
 					return $Buffdate;
				}
			?><center>
			<table width="100%" class="table table-striped table-bordered table-hover" id="datatable-responsive">
              <tbody>
              	<tr>
                  <td width="39%" height="41" class="table_td">ชื่อผู้แจ้ง :</td>
                  <td width="61%"><?=$objResult['name_user'];?></td>
                </tr>
                <tr>
                  <td class="table_td">เบอร์โทรติดต่อ :</td>
                  <td><?=$objResult['contact_tel'];?></td>
                </tr>
                 <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class="table_td">วัน/เวลา ที่แจ้ง :</td>
                  <td><?php echo $ThDate=ConvDate($date_to).'&nbsp;'.$objResult['time'].'&nbsp;น.'; ?></td>
                </tr>
                <tr>
                  <td class="table_td">คณะ/หน่วยงาน :</td>
                  <td><?=$objResult['department'];?></td>
                </tr>
                <tr>
                  <td class="table_td">ชื่ออาคาร/ชั้น :</td>
                  <td><?=$objResult['building'];?></td>
                </tr>
                <tr>
                  <td class="table_td">ห้อง :</td>
                  <td><?=$objResult['room'];?></td>
                </tr>
                <tr>
                  <td class="table_td">เบอร์ที่เสีย :</td>
                  <td><?=$objResult['phone'];?></td>
                </tr>
                <tr>
                  <td class="table_td">กลุ่ม :</td>
                  <td><?=$objResult['group'];?></td>
                </tr>
                <tr>
                  <td class="table_td">อาการ :</td>
                  <td><?=$objResult['other'];?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="imgreport"><a href="report_rehearsal.php?id=<?=$_GET['id']?>"><img src="../images/print.png" title="ปริ้น" width="50" height="50">พิมพ์เอกสาร</a></td>
                </tr>
              </tbody>
			</table>
			</center>
			</div>
		</div>		
<!-- สิ้นสุดเขียนหน้าตาตรงนี้-->					

        <?php include('footer.php'); ?> 
        </div>
		
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
        <script src="assets/js/demo/home.js"></script>
		.
		 <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#datatable-responsive').DataTable({
            responsive: true
			});
    });
    </script>
    </body>
</html>