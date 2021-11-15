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
                    <div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="datatable-responsive">
						<thead>
							<tr >
								<th >ลำดับ</th>
								<th >วันที่ซ่อมเสร็จ</th>
								<th >ชื่อผู้แจ้ง</th>
								<th >เบอร์ติดต่อ</th>
								<th>ชื่อหน่วยงาน</th>
								<th >เบอร์ที่เสีย</th>
                                <th >สถานะ</th>
                                <th >ดำเนินการ</th>
                                <th >ข้อมูล</th>
							</tr>
							<tfoot>
							<tr>
								<th >ลำดับ</th>
								<th >วันที่ซ่อมเสร็จ</th>
								<th >ชื่อผู้แจ้ง</th>
								<th >เบอร์ติดต่อ</th>
								<th>ชื่อหน่วยงาน</th>
								<th >เบอร์ที่เสีย</th>
                                <th >สถานะ</th>
                                <th >ดำเนินการ</th>
                                <th >ข้อมูล</th>
							</tr>
							</tfoot>
						</thead>
						<tbody>
                        <?php
							
                        function ConvDate($convD) {
						$GGyear=substr($convD,0,4)+543; //ตัดเอาปี ค.ศ. มาทำเป็น พ.ศ.
						$GGmonth=substr($convD,5,2); //ตัดเอาเดือน
						$GGdate =substr($convD,8,2); //ตัดเอาวันที่
						$Buffdate=$GGdate."-".$GGmonth."-".$GGyear; //เรียงใหม่
						return $Buffdate;
					}
					        $count = 0;
							$strSQL =  mysql_query("SELECT * FROM `rehearsal` where `rehearsal`.`status` = 1 ORDER BY `d_update` DESC") or die ("Select Error");
											while($objResult = mysql_fetch_array($strSQL)){
												$count++;
												$date_to= date($objResult['d_update']);
												echo "<tr>";
												echo "<th>".$count."</th>";
												echo "<td class='column1'>".$ThDate=ConvDate($date_to)."</td>";
												echo "<td class='column2'>".$objResult['name_user']."</td>";
												echo "<td class='column3'>".$objResult['contact_tel']."</td>";
												echo "<td class='column4'>".$objResult['department']."</td>";
												echo "<td class='column5'>".$objResult['phone']."</td>";
													if($objResult['status']==0){
														echo "<td class='column62'>รอดำเนินการ</td>";
													}
													else{
														echo "<td class='column61'>ซ่อมเสร็จแล้ว</td>";
													}
												
												echo '<td class="column7" align="center" onclick="document.location = \'status_rehearsal.php?id='.$objResult['r_id'].'\';"><img src="../images/paperclip.png" width="32" height="32" title="สถานะการซ่อม"></td>';
												echo "<td class='column7' align='center'>"?><a href=../admin/detail_rehearsal2.php?id=<?=$objResult['r_id']?>><img src='../images/file-word.png' width='32' height='32' title="รายละเอียด"></a><?php "</td>";
												echo "</tr>";
											}						
                                	?>
						</tbody>
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
    $(document).ready(function() {
        $('#datatable-responsive').DataTable({
            responsive: true
			});
    });
    </script>
    </body>
</html>