<?php 
	include ('../admin/destroy_session.php');
		date_default_timezone_set('Asia/Bangkok');
		$t = date('H:i:s');
		$d = date('d');
		$m = date('m');
		$y = date('Y')+543;
		
		
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
    </head>.
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
			?>
	<?php include('header.php'); ?> 
	 <div id="global">
		<div class="container-fluid">
		<div class="panel-heading">สถานะการซ่อม </div>                     
                    <div class="panel-body">
				<table>	
			<form class="form-control" action="../admin/update_status_rehearsal.php" method="post">
			<?php $id = $_GET['id']; ?>
                	<input  class="form-control" type="hidden" name="id" value="<?=$id?>">
				<tbody>
				<tr>
				<td width="20%"></td>				
				<td width="2%"></td>
				<td width="50%"></td>
				</tr> 
					<tr>
                    <td style="text-align:right" >วันที่</td><td>&nbsp;</td><td><input class="form-control" type="text" id="datetime" value="<?='วันที่ : '.$d.'-'.$m.'-'.$y.'&nbsp;เวลา&nbsp;'.$t?>"></td>
					</tr>
					<tr>
					<td style="text-align:right" >เบอร์ที่เสีย</td><td>&nbsp;</td><td><input class="form-control" type="text" id="phone" value="<?=$objResult['phone']?>"></td>
					</tr>
					<tr>
					<td style="text-align:right" >ชื่อผู้แจ้ง</td><td>&nbsp;</td><td><input class="form-control" type="text" id="name_user" value="<?=$objResult['name_user']?>"></td>
					</tr>
					<tr>
					<td style="text-align:right" >เบอร์ติดต่อกลับ</td><td>&nbsp;</td><td><input class="form-control" type="text" id="contact_tel" value="<?=$objResult['contact_tel']?>"></td>
					</tr>
					<tr>
					<td style="text-align:right" >หน่วยงาน</td><td>&nbsp;</td><td><input class="form-control" type="text" id="department" value="<?=$objResult['department']?>"></td>
					</tr>
					<tr>
					<td style="text-align:right" >ห้อง</td><td>&nbsp;</td><td><input class="form-control" type="text" id="room" value="<?=$objResult['room']?>"></td>
					</tr>
					<tr>
					<td style="text-align:right" >กลุ่มเลขหมาย</td><td>&nbsp;</td><td><input class="form-control" type="text" id="group" value="<?=$objResult['group']?>"></td>
					</tr>
					<tr>
					<td style="text-align:right" >อาคารเสีย</td><td>&nbsp;</td><td><input class="form-control" type="text" id="other" value="<?=$objResult['other']?>"></td><td><hr>
					</tr>
					<tr>
                	<td style="text-align:right" >ดำเนืนการ</td><td>&nbsp;</td><td><select class="form-control" id="status" name="status">
                    	<option value="0">รอดำเนินการ</option>
                        <option value="1">ซ่อมเสร็จ</option>
                    </select>
					</td>
				</tr>
				<tr>
               
                <?php $id = $_GET['id']; ?>
				
                	<td style="text-align:right" >รายงานการซ่อม</td><td>&nbsp;</td><td><textarea class="form-control" name="service_report" id="service_report"  ><?=$objResult['service_report']?></textarea>
					</td>
				</tr>
				<tr>
				
				<td>&nbsp;</td>
				</tr>
              <tr>
					<td></td><td>&nbsp;</td><td><button class="btn btn-success" type="submit"><span>ตกลง</span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php"><button class="btn btn-success" type="button"><span>ยกเลิก</span></button></a></td>
				</tr>
				</tbody>
			</form>
			</table>
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
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
